@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($catalog as $item)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">
                                <span>{{ $item->price }}</span><br>
                                <span>{{ $item->type }}</span><br>
                            </p>
                            <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">Go somewhere</a>
                            <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- <a href="{{ route('comics.show', $comics->id) }}" class="btn btn-primary">Go somewhere</a> --}}
