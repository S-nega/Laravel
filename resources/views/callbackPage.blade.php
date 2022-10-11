<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
{{--        <link href="/resources/css/styles.css" rel="stylesheet">--}}

        <style>
            @include('styles')
        </style>

    </head>
    <body>
        <div class="container">
            @include('menu')
            <div class="authorization-form">
                <h1>Please leave some information to manager could contact to you</h1>
                <form action="#" class="authorize-form">
                    @csrf
                    <label for="email">Enter your name</label>
                    <input type="text" id="name" placeholder="name">
                    <br>

                    <label for="pass">Enter your Surname</label>
                    <input type="text" id="surname" placeholder="surname">
                    <br>
                    <label for="pass">Enter your phone number</label>
                    <input type="number" id="phone" placeholder="8 777 000 00 00">

                    <br>
                    <label for="pass">Add some information about your flat or house</label>
                    <textarea id="description" placeholder="Address, square, style, etc"></textarea>
                    <br>
                    <input type="submit" value="Submit your application" class="authorize-button">
                </form>
            </div>
        </div>
    </body>
</html>
