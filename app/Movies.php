<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
  public $timestamps = false;
  protected $fillable = [
    'moviesname', 'movieyear', 'movieplot', 'moviepicture'
  ];
  public function comments()
 {
   return $this->hasMany('App\Comment');
 }
}
