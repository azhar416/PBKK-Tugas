<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    { 
        return view('article', [
            "title" => "Halaman Artikel",
            "name" => "Daffa M Azhar",
            "email" => "daffaazhar.19051@mhs.its.ac.id",
            // "articles" => Article::all()
            "articles" => Article::latest()->get(),
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }

}
