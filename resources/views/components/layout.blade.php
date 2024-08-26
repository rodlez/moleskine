<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <!-- Use vite to load the file from resourcer instead of the public directory, to up and run the vite server npm run dev -->
        <!-- npm run build to generate the files for production -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        
    </head>
    <body>
    <!-- Session to pass the message for the CRUD operations -->
    @session('message')
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endsession
        <!-- To output variables in blade, use slot -->    
    {{ $slot }}
    </body>
</html>
