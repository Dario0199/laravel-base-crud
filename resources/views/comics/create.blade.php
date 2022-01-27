@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2 class="mb-5 mt-5">Create New Comics</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <label class="mb-1" for="title">Title</label>
            <input class="mb-4 form-control" type="text" id="title" name="title">

            <label class="mb-1" for="description">Description</label>
            <textarea class="mb-4 form-control" name="description" id="description" rows="10"></textarea>

            <label class="mb-1" for="thumb">Url Image</label>
            <input class="mb-4 form-control" type="text" id="thumb" name="thumb">

            <label class="mb-1" for="price">Price</label>
            <input class="mb-4 form-control" type="text" id="price" name="price">

            <label class="mb-1" for="series">Series</label>
            <input class="mb-4 form-control" type="text" id="series" name="series">

            <label class="mb-1" for="sale_date">Sale Date</label>
            <input class="mb-4 form-control" type="text" id="sale_date" name="sale_date">

            <label class="mb-1" for="type">Type</label>
            <input class="mb-5 form-control" type="text" id="type" name="type">

            <button class="btn btn-primary" type="submit">
                ADD
            </button>
        </form>
    </div>
@endsection