<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Categorie</title>
    <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="card-panel teal lighten-2">
    <div class="card-panel teal lighten-2">
      <h5 class="center-align">Veuillez introduire les informations de cette catégorie :</h5>
    </div>
    <form action="{{route('categories.index')}}" method="post">
      <input type="text" name="label" placeholder="Enter a Label">
      <input type="text" name="description" placeholder="Enter a description">
      <div class="right-align"> <input type="submit" name="submit" value="Create Categorie"></div>
      {{csrf_field()}}
    </form>
  </div>
  </body>
</html>
