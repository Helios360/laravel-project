<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public array $articles;

    public function index(){
        $articles=[
            [
                "titre" => "L’IA soigne mieux",
                "contenu" => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."
            ],
            [
                "titre" => "Villes vertes",
                "contenu" => "Les métropoles deviennent plus écologiques et durables."
            ],
            [
                "titre" => "Télétravail",
                "contenu" => "Plus de liberté, mais aussi plus de solitude."
            ]
        ];
        return view('welcome', ["name" => "Hellios", "articles" => $articles]);
    }
}
