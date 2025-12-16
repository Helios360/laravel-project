@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2> Bienvenue sur le site de {{ $name }}</h2>

    <h2>La version loop</h2>
    <div style="display:flex; gap:1rem;">
        @foreach($articles as $article)
            <x-article :titre="$article['titre']" :desc="$article['contenu']"/>
        @endforeach
    </div>
@endsection
