<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public string $titre;
    public string $desc;

    public function __construct(string $titre, string $desc)
    {
        $this->titre = $titre;
        $this->desc = $desc;
    }

    public function render(): View
    {
        return view('components.article');
    }
}
