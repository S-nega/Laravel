<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            @include('styles')
        </style>

    </head>
    <body>
        <div class="container">
            @include('menu')
            <div class="authorization-form">
                <h1>Please authorize for using admin rights</h1>
                <form action="{{route('login')}}" class="authorize-form" method="post">
                    @csrf
                    <label for="email">Enter your email</label>
                    <input type="email" id="email" placeholder="example@mail.com" name="email">
                    <br>
                    <label for="pass">Enter your password</label>
                    <input type="password" id="pass" placeholder="password" name="password">
                    <br>
                    <input type="submit" value="Enter" class="authorize-button">
                    <br>
                    <a href="#">Forgot your password?</a>
                    <a href="/registration-page">Don't have an account yet?</a>
                </form>
            </div>
        </div>
    </body>
</html>
