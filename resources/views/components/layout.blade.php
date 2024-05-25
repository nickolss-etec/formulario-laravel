@props(['title', 'content'])

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
</head>
<body class="bg-slate-950 text-white">
    <x-header></x-header>
    {{ $content }}
    <x-footer></x-footer>
</body>
</html>