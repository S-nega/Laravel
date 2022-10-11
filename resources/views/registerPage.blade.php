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
        <h1>Please register if you have an admin rights</h1>
        @if(session('status'))
            {{session('status')}}
        @endif
        <form action="{{route('user.create')}}" class="authorize-form" method="post">
            @csrf
            <label for="email">Enter your email</label>
            <input type="email" id="email" placeholder="example@mail.com" name="email">
            <br>
            <label for="email">Enter your verify code</label>
            <input type="number" id="verifyCode" placeholder="12345" name="verifyCode">
            <br>
            <label for="name">Enter your name</label>
            <input type="text" id="name" placeholder="Alex" name="name">
            <br>
            <label for="pass">Enter your password</label>
            <input type="password" id="pass" placeholder="password" name="password">
            <br>
            <label for="pass">Repeat your password</label>
            <input type="password" id="repPass" placeholder="password" name="confirm_password">
            <br>
            <input type="submit" value="Enter" class="authorize-button">
            <br>
            <a href="/authorization-page">Already have an account?</a>
        </form>
    </div>
</div>
</body>
</html>
