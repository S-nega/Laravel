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
                    <h1>Edit Project</h1>
                </div>
                <div class="block-body">
                    @foreach($projects as $project)
                        <form action="" method="post" class="authorize-form">
                            @csrf
                            <label for="shortDescription">Edit project description</label>
                            <input type="text" id="description" placeholder="shortDescription" value="{{$project->shortDescription}}" name="shortDescription">
                            <br>
                            <label for="address">Edit project address</label>
                            <input type="text" id="address" placeholder="address" value="{{$project->location}}" name="location">
                            <br>
                            <label for="author">Edit project's author</label>
                            <input type="text" id="author" placeholder="author" value="{{$project->author}}" name="author">
                            <br>
                            <label for="image_src">Edit image's src</label>
                            <input type="text" id="image_src" placeholder="image.png" value="{{$project->image_src}}" name="image_src">
                            <br>
{{--                        <div class="project-block">--}}
{{--                            <a href="#">--}}
{{--                                --}}{{--                                            /${project_url}--}}
{{--                                <div class="project_info-block">--}}
{{--                                    <img src="C:/Users/Snega/design/resources/css/{{$project->image_src}}">--}}
{{--                                    <h2>{{$project->location}}</h2>--}}
{{--                                    <p>{{$project->shortDescription}}</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <div class="buttons-for-admin">--}}
{{--                                <a href="/editPage/{{$project->id}}">Edit Project</a>--}}
{{--                                <a href="/delete/{{$project->id}}">Delete Project</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                            <input type="submit" value="Save" class="authorize-button">
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
