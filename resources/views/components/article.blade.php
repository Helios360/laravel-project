<div style="display:flex; gap:1rem;">
    @foreach($articles as $article)
    <div>
        <h3>{{ $article['titre'] }}</h3>
        <p>{{ $article['contenu'] }}</p>
    </div>
    @endforeach
</div>