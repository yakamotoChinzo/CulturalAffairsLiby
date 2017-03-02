<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['label', 'description'];

    public function posts(){
      $this->hasMany('App/Post');
    }
}
