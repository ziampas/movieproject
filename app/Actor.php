<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  public $timestamps = false;
  protected $fillable = [
    'firstname', 'lastname', 'birthdate'
  ];

}
