@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2> Bienvenue sur le site de {{ $name }}</h2>
    <div style="display:flex;gap:1rem;">
        <x-article titre="L’IA soigne mieux" desc="L’intelligence artificielle aide les médecins à diagnostiquer plus vite." />
        <x-article titre="Villes vertes" desc="Les métropoles deviennent plus écologiques et durables." />
        <x-article titre="Télétravail" desc="Plus de liberté, mais aussi plus de solitude." />
    </div>
@endsection
