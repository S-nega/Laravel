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
                    <h1>Add new Project</h1>
                </div>
                <div class="block-body">
                    <form action="add" method="post" class="authorize-form">
                        @csrf
                        <label for="shortDescription">Enter project description</label>
                        <input type="text" id="description" placeholder="shortDescription" name="shortDescription">
                        <br>
                        <label for="address">Enter project address</label>
                        <input type="text" id="address" placeholder="address" name="location">
                        <br>
                        <label for="author">Enter project's author</label>
                        <input type="text" id="author" placeholder="author" name="author">
                        <br>
                        <label for="image_src">Enter image's src</label>
                        <input type="text" id="image_src" placeholder="image.png" name="image_src">
                        <br>
                        <input type="submit" value="Enter" class="authorize-button">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
