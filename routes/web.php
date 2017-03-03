<?php
use App\Post;
use App\Categorie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
  $cat = Categorie::create(['label'=>"Title 1"]);
  $cat1 = Categorie::create(['label'=>"Title 2"]);
  $cat2 = Categorie::create(['label'=>"Title 3"]);
  $cat = Categorie::findOrFail(1);
  $cat1 = Categorie::findOrFail(2);
    // $post = Post::create(['title'=>'My first dikchi chi haja', 'description'=>'What is the fuck']);
  $cat->categories()->save($cat1);
});

Route::resource('/posts', 'PostController');
Route::resource('/categories', 'CategorieController');

Auth::routes();

Route::get('/home', 'HomeController@index');
