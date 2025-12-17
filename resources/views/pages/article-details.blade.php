@extends('layouts.app')
@section('title', $article->title)
@section('content')
    <x-article :article="$article" />
<!--
    <h2>{{$article->title}}</h2>
    <p>{{$article->description}}</p>
-->
@endsection