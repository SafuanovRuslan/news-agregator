<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body', 'img_url', 'category_id', 'source'];
    use HasFactory;

    public static function rules()
    {
        return [
            'title' => 'required|min:10|max:255',
            'body' => 'required|min:30|max:65535',
            'category_id' => 'required|integer',
        ];
    }
}
