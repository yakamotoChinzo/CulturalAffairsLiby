<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="{{route('posts.index')}}" >
      <input type="text" name="title" placeholer="Enter the title of the post" value="">
      <input type="text" name="description" placeholder="Short description" value="">
      <input type="text" name="content" placeholder="A HTML format plz" value="">
      {{ csrf_field() }}
      <input type="submit" name="submit">
    </form>
  </body>
</html>
