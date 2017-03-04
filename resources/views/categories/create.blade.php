<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Categorie</title>
  </head>
  <body>
    <form action="{{route('categories.index')}}" method="post">
      <input type="text" name="label" placeholder="Enter a Label">
      <input type="text" name="description" placeholder="Enter a description">
      <input type="submit" name="submit" value="Create Categorie">
      {{csrf_field()}}
    </form>
  </body>
</html>
