<!DOCTYPE html>
<html lang="{{ str_replace('__', '-', app()->getLocale) }} ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div id="conteudo">
        @yield('content')
    </div>
</body>
</html>