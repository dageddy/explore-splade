<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @spladeHead
        @vite('resources/js/app.js')
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    </head>
    <body class="font-sans antialiased">
        @splade
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
