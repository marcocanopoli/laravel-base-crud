@extends('layouts.template')
@section('content')
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
                    {{-- <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">EDIT</a></td>
                    <td><a href="{{ route('comics.delete', $comic->id) }}" class="btn btn-warning">DELETE</a></td> --}}
                </tr>
            @endforeach
        </table>
    </section>

    {{ $allComics->links() }}
@endsection