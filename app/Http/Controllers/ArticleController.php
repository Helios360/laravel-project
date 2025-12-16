<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show($id): View{
        return view('pages.article-details', [
            'id' => $id,
            'title' => "Article $id"
        ]);
    }
}
