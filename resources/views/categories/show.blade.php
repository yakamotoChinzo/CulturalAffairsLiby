<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show categorie view</title>
  </head>
  <body>
    <h2><a href="{{route('categories.edit', $categorie->id)}}">{{$categorie->label}}</a></h2>
  </body>
</html>
