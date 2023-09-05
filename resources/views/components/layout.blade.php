<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Ralp.com' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @livewireStyles
    @vite(['resources/css/app.css'])
    
    {{ $style ?? '' }}

</head>
<body>
    <x-navbar />
    <main>
    {{ $slot }}
    </main>
    <x-footer />
    @livewireStyles
    @vite(['resources/js/app.js'])
    {{ $script ?? '' }}
</body>
</html>