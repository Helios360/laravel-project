@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <hr>
    <h2> Bienvenue sur le site de {{ $name }}</h2>
    <hr>
    <h3>Articles</h3>
    <div style="display:flex; gap:1rem;">
        @foreach($articles as $article)
            @if($loop->last)
                @break
            @endif
            <x-article :article="$article"/>
        @endforeach
    </div>
    <hr>
@endsection