<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="{{route('categories.create')}}">Ajouter une nouvelle categorie</a>
    <ul>
      @foreach ($categories as $categorie)
        <li>
          <a href="{{route('categories.show',$categorie->id )}}">{{$categorie->label}}</a>
        </li>
      @endforeach
    </ul>
  </body>
</html>
