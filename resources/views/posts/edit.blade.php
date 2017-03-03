<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Edit a post</h1>
    <form method="POST" action="{{route('posts.update')}}" >
      <input type="hidden" name="_method" value="PUT">
      <input type="text" name="title" value="{{$post->title}}">
      <input type="text" name="description" value="{{$post->description}}">
      <input type="text" name="content" value="{{$post->content}}">
      {{ csrf_field() }}
      <input type="submit" name="submit">
    </form>
  </body>
</html>
