<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投稿画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='disease_name'>{{ $post->disease_name }}</h1>
        <h3>
        <p class='symptoms'>{{ $post->symptoms }}</p>
        <p class='therapeutic_method'>{{ $post->therapeutic_method }}</p>
        <p class='hospital_name'>{{ $post->hospital_name }}</p>
        <p class='doctor_name'>{{ $post->doctor_name }}</p>
        <p class='memo'>{{ $post->memo }}</p>
        </h3>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>