<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RestaurantWebsite</title>

        
        @vite('resources/js/app.js')

       
    </head>
    <body class="antialiased">
      
        <div class="flex justify-center items-center h-screen">
            <h1 class="text-3xl text-purple-600 font-bold">Laravel Restaurant Website</h1>
        </div>

    </body>
</html>
