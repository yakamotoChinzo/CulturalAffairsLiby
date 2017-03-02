<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['label', 'description'];

    public function posts(){
      return $this->hasMany('App\Post');
    }

    public function categories(){
      return $this->hasMany('App\Categorie');
    }
}
