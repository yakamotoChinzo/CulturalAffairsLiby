<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit categorie view</title>
  </head>
  <body>
    <form  action="{{route('categories.update', $categorie)}}" method="post">
      <input type="hidden" name="_method" value="PUT">
      <input type="text" name="label" value="{{$categorie->label}}">
      <input type="text" name="description" value="{{$categorie->description}}">
      <input type="submit" name="submit" value="Update">
      {{csrf_field()}}
    </form>
    <form  action="{{route('categories.destroy',$categorie)}}" method="post">
      <input type="hidden" name="_method" value="DELETE">
      <input type="submit" name="submit" value="Delete">
      {{csrf_field()}}
    </form>
  </body>
</html>
