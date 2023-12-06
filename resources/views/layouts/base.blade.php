<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>Jobs4Devs - {{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container mt-3 bg-light">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>           
        </div>
    </body>
</html>
