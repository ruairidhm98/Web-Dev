@extends('fun.base')

<link rel="stylesheet" href="{{ URL::asset('css/lists.css') }}" />

@section('title', 'Chocolates')

@section('content')

    <h1>Chocolates</h1>
    <br>

    <?php 
    function containsMilk($milk) {
        if ($milk) 
            echo "Yes";
        else    
            echo "No";
    } 
    ?>

    <ul class="list-group">
    @foreach($all_chocolates as $chocolate)
        <li class="list-group-item">    
            <h2 class="list-group-item-heading">{{ $chocolate-> type }}</h2>
            <p class="list-group-item-text">
                <strong>Calories: </strong>{{ $chocolate->calories }}<br>
                <strong>Fat: </strong>{{ $chocolate->fat }}<br>
                <strong>Contains Milk: </strong>{{ containsMilk($chocolate->milk) }}
            </p>
        </li>
    @endforeach
    </ul>

@endsection



