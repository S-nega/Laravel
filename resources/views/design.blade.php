<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        @include('styles')
    </style>

</head>
<body>
    <div class="container">
        @include('menu')
        <div class="main-block">
            <div class="block-header">
                <h1>Welcome to Interior Design Studio!</h1>
            </div>
            <div class="block-body">
            Some information about company

            </div>
        </div>
    </div>
</body>
</html>
