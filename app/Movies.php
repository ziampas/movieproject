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
 public function user()
{
return $this->belongsTo('App\User');
}
public function actors()
{
 return $this->hasMany('App\Actor');
}
}
