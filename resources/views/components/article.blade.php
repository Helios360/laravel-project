<div>
    <h3>{{ $article->title }}</h3>
    <p>{{ Str::limit($article->description, 30) }}</p>
    <a href="{{route('articles.details', $article->id)}}" ><u>More...</u></a>
</div>