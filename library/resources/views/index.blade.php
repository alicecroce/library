<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lezione 8- library</title>
        @vite(['resources\css', 'library\resources\js\app.js'])
        
    </head>
    <body >
    <ul>
        @foreach ($books as $book)
            <li>
                {{$book['author']}}-{{$book['title']}}-{{$book['pages']}}-{{$book['year']}}
            </li>
        @endforeach
    </ul>
    </body>
</html>
