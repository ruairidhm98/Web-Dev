@extends('fun.base')

<link rel="stylesheet" href="{{ URL::asset('css/animation.css') }}" />

@section('title', 'Index')

@section('content')

    <h3>Welcome to my home page!</h3>

    <script type="text/javascript" src="{{ URL::asset('js/button.js') }}"></script>

    <button onclick="changeText()" type="button">Click Me!</button><br><br>
    <button onclick="square(3)" type="button">Click Me!</button><br><br>
    <button onclick="printArray()" type="button">Click Me!</button><br><br>

    <p id="hello">Watch this...<span style="color:blue">HAHA...</span></p>
    <p id="new">Lol</p>
    <p>Shows how bubble sort works with a sample array</p>
    <p id="sort"></p>
    <p><button onclick="myMove()">Click Me</button></p>
    
    <div id ="myContainer"><div id ="myAnimation"></div></div>

@endsection