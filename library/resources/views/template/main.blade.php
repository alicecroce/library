<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Shelter</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body>

    <x-nav />

    <x-header headerTitle="{{ $headerTitle }}" />

    <div class="min-vh-100">
        <!-- serve a creare la barra di scorrimento -->
        {{ $slot }}
    </div>

    <x-footer />

</body>

</html>
