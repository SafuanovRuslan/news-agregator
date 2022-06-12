<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];
    
    use HasFactory;

    public static function rules()
    {
        return [
            'name' => 'required|min:10|max:255',
        ];
    }
}
