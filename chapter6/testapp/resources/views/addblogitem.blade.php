<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="antialiased">
        <form action="/saveblogitem" method="post">
            @csrf
            <input type="text" name="title"/>
            <button>Save</button>
        </form>    
    </body>
</html>
