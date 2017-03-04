<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="{{route('posts.create')}}">Ajouter poste</a>
    <ul>
      @foreach ($posts as $post)
        <li>
          <a href="{{route('posts.show',$post->id )}}">{{$post->title}}</a>
        </li>
      @endforeach
    </ul>
  </body>
</html>
