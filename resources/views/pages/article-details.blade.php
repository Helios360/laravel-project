@extends('layouts.app')
@section('title', $article->title)
@section('content')
    <h2>{{$article->title}}</h2>
    <p>{{$article->description}}</p>
@endsection
