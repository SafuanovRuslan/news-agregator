<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $body = "
            <h1>Fun Times</h1>
            <p>Это сервис будущего агрегатора новостей. Добро пожаловать, мы рады вас здесь видеть =)</p>
        ";
        return $body;
    }
}
