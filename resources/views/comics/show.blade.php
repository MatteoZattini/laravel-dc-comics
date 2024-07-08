@extends('layouts.app')

@section('content')
    <p>{{ $comic->description }}</p>
    {{-- <form method="POST" action="{{ route('comics.destroy', $comic->id) }}"> --}}
    <form>
        @csrf
        @method('DELETE')
        {{-- <button class="btn btn-danger" type="submit" value="elimina"></button> --}}
        <button class="btn btn-danger" type="submit" formmethod="POST" formaction="{{ route('comics.destroy', $comic->id) }}">elimina</button>
    </form>
@endsection