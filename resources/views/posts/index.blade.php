<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body></body>
        <h1>Blog Name</h1>
        <div class='posts'>
            [<a href='/posts/create'>create</a>]
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'>
                  <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body}}</p>
                 <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                 @csrf
                 @method('DELETE')
                 <button type="button" onclick= "buttonClick( {{$post->id}})">delete</button> 
                 </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
　　　　 function buttonClick(PostId){
　　　　      if (confirm('一度削除すると復元が出来ません。\n本当によろしいですか？')){
　　　　         document.getElementById(`form_${PostId}`).submit();
　　　　          }
　　　　            }
　　　   </script>
    </body>
</html>
