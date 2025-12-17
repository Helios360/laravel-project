<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class IndexController extends Controller
{
    public function index(){
        $articles=Article::orderBy('id', 'desc')->get();
        return view('welcome', ["name" => "Hellios", "articles" => $articles]);
    }
}
