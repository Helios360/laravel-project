<div>
    <h3>{{ $article->title }}</h3>
    <p>{{ Str::limit($article->description, 30) }}</p>
    <h4>{{ $article->created_at }}</h4>
</div>