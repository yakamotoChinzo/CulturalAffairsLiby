<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Category interface</title>
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="card-panel teal lighten-2">
    <div class="card-panel teal lighten-2">
      <h5 class="center-align">Interface de gestion des catégories :</h5>
    </div>
    </div>

    <!--- Content -->
    <div class="center-align">
    <a class="waves-effect waves-light btn" href="{{route('categories.create')}}">Ajouter une nouvelle categorie</a>
  </div>
    <table class="highlight">
            <thead>
              <tr>
                  <th data-field="id">Categories</th>

              </tr>
            </thead>

            <tbody>
              <tr>

                  @foreach ($categories as $categorie)
                    <td>
                      <a href="{{route('categories.show',$categorie->id )}}">{{$categorie->label}}</a>
                    </td>
                  @endforeach



              </tr>

            </tbody>
          </table>
  </body>
</html>
