<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\View\View;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id): View{
        $article = Article::findOrFail($id); // 404 automatique si inexistant ...
        return view('pages.article-details', compact('article'));
    }
    public function create(){
        Article::insert([
            [
                'title' => "L’IA soigne mieux",
                'description' => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Villes vertes",
                'description' => "Les métropoles deviennent plus écologiques et durables.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Télétravail",
                'description' => "Plus de liberté, mais aussi plus de solitude.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        return redirect('/');
    }
    public function update(int $id){
        $article = Article::findOrFail($id);
        $article->update([
            'title' => $article->title,
            'description' => $article->description,
        ]);
        return redirect('/');
    }
    public function delete($id){
        $article=Article::findOrFail($id); // 404 automatique si inexistant ...
        $article->delete();
        return redirect('/')->with('success', 'Article supprimé');
    }
}

