<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Ralp.com' }}</title>

    @vite(['resources/css/app.css'])
    
    {{ $style ?? '' }}

</head>
<body>
    <x-navbar />
    <main>
    {{ $slot }}
    </main>
    <x-footer />
    @vite(['resources/js/app.js'])
    {{ $script ?? '' }}
</body>
</html>