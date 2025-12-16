<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public array $articles;

    public function __construct()
    {
        $this->articles=[
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
    }

    public function render(): View
    {
        return view('components.article');
    }
}
