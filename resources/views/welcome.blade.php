<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="w-full bg-red-200 h-5">testing tailwindcss</div>
    <div x-data="{ open: false }">
        <button @click="open = ! open">Toggle Dropdown</button>

        <div x-show="open">
            Dropdown Contents...
        </div>
    </div>
    <input x-data x-mask="99/99/9999" placeholder="MM/DD/YYYY">
    @livewireScripts
</body>

</html>
