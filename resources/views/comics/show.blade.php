@extends('layouts.template')
@section('content')
    <style>
        section > * {
            padding: 10px 0;       
        }
    </style>
    <section>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h1>Titolo: {{ $comic->title }}</h1>
        <h2>{{ $comic->price }} &euro;</h2>
        <h3>Serie: {{ $comic->series }}</h3>
        <h4>Tipologia: {{ $comic->type }}</h4>
        <p>{{ $comic->description }}</p>
    </section>
@endsection