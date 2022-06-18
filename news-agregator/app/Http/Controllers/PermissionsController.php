<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PermissionsController extends Controller
{
    public function index()
    {
        return view('permissions', ['users' => User::query()->get(['id', 'name', 'email', 'isAdmin'])]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $user = User::query()->where('email', $request->input('email'))->get()[0];
        // dd($user);
        $user->fill($request->all());
        $user->save();
        return redirect()->route('permissions');
    }
}
