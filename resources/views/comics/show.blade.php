@extends('layouts.app')

@section('content')
    <p>{{ $comic->description }}</p>
    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Elimina Comic"></input>
    </form>
@endsection