<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('articles', [
            "articles" => Article::all(), //bisa self bisa static, bedanya, ada di staccoverflow [in short: self bind to var parent, static bind to var child] kayaknya :3
            "name" => "Sherlock Holmes",
            "email" => "holmes.sherlock@logic.com"
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
    
}
