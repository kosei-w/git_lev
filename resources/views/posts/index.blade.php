<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
<<<<<<< HEAD
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'>{{$post->title }}</h2>
                <p class='body'>{{ $post->body}}</p>
            </div>
=======
            @foreach ($posts as $post)
                <div class='post'>
                   <h2 class='title'>
                     <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                   </h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
>>>>>>> c1fa252 ([add]記事詳細画面)
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> c1fa252 ([add]記事詳細画面)
