@extends('fun.base')

<link rel="stylesheet" href="{{ URL::asset('css/lists.css') }}" />

@section('title', 'Movies')

@section('content')

    <h1>Movies</h1>

    <ul class="list-group">
    @foreach ($all_movies as $movie)
        <li class="list-group-item">
            <h2 class="list-group-item-heading">{{ $movie->title }}</h2>
            <p class="list-group-item-text">
                <strong>Released on: </strong>{{ date('F d, Y', strtotime($movie->released_on)) }}
                <br><strong>Rating: </strong>{{ $movie->rating }}
                <br><strong>Review: </strong> {{ $movie->review }}
            </p>
        </li>
    @endforeach
    </ul>

@endsection