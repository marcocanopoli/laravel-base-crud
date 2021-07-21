@extends('layouts.template')
@section('content')
    @if (session('deleted'))
        <div class="alert alert-success">{{ session('deleted') }}</div>
    @endif

    <style>
        .pagination {
            justify-content: center;
        }
    </style>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Series</td>
                    <td>Type</td>
                    <td>Price</td>
                </tr>
            </thead>
            @foreach ($allComics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}&euro;</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">SHOW</a></td>
                    <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">EDIT</a></td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic->id) }}" 
                            method="post"
                            onsubmit = "return confirm('Sei sicuro di voler cancellare definitivamente {{ $comic->title }}?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="btn btn-warning">
                        </form>
                        {{-- <form 
                            action="{{ route('beers.destroy', $item->id) }}" 
                            method="POST"
                            onSubmit = "return confirm('Sei sicuro di voler cancellare definitivamente {{ $item->brand }} {{ $item->name }}?')"
                            >
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </section>

    {{ $allComics->links() }}
@endsection