<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="antialiased">
        <h1>Добро пожаловать</h1>
        @foreach ($list as $item)
        <div class="blog-item">
            <h2>{{$item->title}}</h2>
            <div class="blog-content">
                {{$item->content}}
            </div>
        </div>
        @endforeach
    </body>
</html>
