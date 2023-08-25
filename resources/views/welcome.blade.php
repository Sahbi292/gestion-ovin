<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion-ovins</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 <link href ="{{ asset('dist/css/style.css') }}
 " rel="stylesheet" type="text/css">
 <link href ="{{ asset('vendors') }}
 " rel="stylesheet" type="text/css">
        <!-- Styles -->
       @vite('resources/css/app.css')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="h-full">
        <div id='app'>
        <router-view></router-view>
            @vite('resources/js/app.js')
        </div>
    </body>
</html>
