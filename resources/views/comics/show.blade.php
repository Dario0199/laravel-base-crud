@extends('layouts.main')

@section('main-content')
    <section class="container d-flex justify-content-center">
        <div class="card text-center mt-5 mb-5 w-50 p-5 bg-secondary text-white">
            <div class="image">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
            </div>
            <h1 class="mt-5 mb-5">{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <div class="d-flex justify-content-center">
                <strong>Type:</strong>
                <p class="text-uppercase">{{ $comic->type }}</p>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <strong>{{ $comic->sale_date }}</strong>
                <strong class="text-white bg-success">€{{ $comic->price }}</strong>
            </div>
        </div>
    </section>
    
@endsection