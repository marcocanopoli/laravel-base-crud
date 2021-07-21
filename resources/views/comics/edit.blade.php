@extends('layouts.template')
@section('content')
    <form action="{{ route('comics.update', $comic->id )}}" method="post">
        @csrf
        @method('PATCH')
        
        <div class="form-group">
            <label for="title">Titolo</label><br>
            <input type="text" name="title" id="title" value="{{ $comic->title }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label><br>
            <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>            
        </div>
        <div class="form-group">
            <label for="thumb">Thumbnail</label><br>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">            
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label><br>
            <input type="number" id="price" name="price" step="0.01" value="{{ $comic->price }}">            
        </div>
        <div class="form-group">
            <label for="series">Serie</label><br>
            <input type="text" name="series" id="series" value="{{ $comic->series }}">            
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label><br>
            <input type="date" id="sale_date" name="sale_date"  value="{{ $comic->sale_date }}">            
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label><br>
            <input type="text" name="type" id="type" value="{{ $comic->type }}">           
        </div>
        <input type="submit" value="Invia" class="btn btn-success">
    </form>
@endsection