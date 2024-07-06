@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route("comics.store") }}">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Thumb" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Series</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sale date</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Type</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type" name="type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
