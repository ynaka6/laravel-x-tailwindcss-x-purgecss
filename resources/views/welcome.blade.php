<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Icon --}}
        <link rel="icon" href="{{ asset('favicon.ico') }}">

    </head>
    <body>
        <div class="min-h-screen flex flex-col font-sans">
            <header class="flex items-center justify-between flex-wrap bg-teal p-6">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
                </div>
            </header>
            <div class="flex-grow p-8 text-2xl">
                Contents
            </div>
            <footer class="bg-grey-darkest text-white p-6">
                Footer - Made with <a href="https://tailwindcss.com/" target="_blank" class="text-white hover:text-grey">Tailwind CSS</a>
            </footer>
        </div>
    </body>
</html>
