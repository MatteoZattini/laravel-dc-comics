@extends('layouts.app')

@section('content')
    <a href="{{ route('comics.show', $comic->id) }}"></a>
@endsection