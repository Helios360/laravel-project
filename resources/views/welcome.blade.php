@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2> Bienvenue sur le site de {{ $name }}</h2>
    <div style="display:flex; gap:1rem;">
        @foreach($articles as $article)
            @if($loop->last)
                @break
            @endif
            <x-article :titre="$article['titre']" :desc="$article['contenu']"/>
        @endforeach
    </div>
@endsection
