<?php

namespace App\View\Components;

use Closure;
use App\Models\Article as ArticleModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public ArticleModel $article;

    public function __construct(ArticleModel $article)
    {
        $this->article = $article;
    }

    public function render(): View
    {
        return view('components.article');
    }
}
