@extends('layouts.template')
@section('content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')
        
        <div class="form-group">
            <label for="title">Titolo</label><br>
            <input type="text" name="title" id="title" placeholder="Titolo">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label><br>
            <textarea name="description" id="description" cols="30" rows="10">Descrizione</textarea>            
        </div>
        <div class="form-group">
            <label for="thumb">Thumbnail</label><br>
            <input type="text" name="thumb" id="thumb" placeholder="URL immagine">            
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label><br>
            <input type="number" id="price" name="price" step="0.01" placeholder="0.00">            
        </div>
        <div class="form-group">
            <label for="series">Serie</label><br>
            <input type="text" name="series" id="series" placeholder="URL immagine">            
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label><br>
            <input type="date" id="sale_date" name="sale_date" value="">            
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label><br>
            <input type="text" name="type" id="type" placeholder="Tipologia media">           
        </div>
        <input type="submit" value="Invia" class="btn btn-secondary">
    </form>
@endsection