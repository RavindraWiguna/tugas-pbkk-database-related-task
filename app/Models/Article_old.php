<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_old
{
    private static $articles = [
        [
            "title" => "Chopstic x Minimax Algorithm",
            "slug" => "chopstic-x-minimax-algo",
            "author" => "Cherlock Polmes",
            "body" => "chopstic is Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat iste voluptate, vitae eos nobis asperiores provident doloremque, minus quisquam minima deleniti optio! Neque voluptate deleniti vel? Dicta asperiores voluptates aut." 
        ],
        [
            "title" => "Guess password game",
            "slug" => "guess-password-game",
            "author" => "Lherlock Iolmes",
            "body" => "this is Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat iste voluptate, vitae eos nobis asperiores provident doloremque, minus quisquam minima deleniti optio! Neque voluptate deleniti vel? Dicta asperiores voluptates aut."
        ]
    ];
    public static function all(){
        return collect(self::$articles); //better
        // return self::$articles;
    }

    public static function find($slug){
        $articles = static::all();
        return $articles->firstWhere('slug', $slug);
    }
    // use HasFactory;
}
