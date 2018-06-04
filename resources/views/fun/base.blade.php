<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Home Page')</title>
    <link rel="stylesheet" type="text/css" href="/public/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}" />
</head>

<body>

    <div class="topnav">
        <a href="index">Home</a>
        <a href="movies">Movies</a>
        <a href="chocolates">Chocolates</a>
    </div>

    <br>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>