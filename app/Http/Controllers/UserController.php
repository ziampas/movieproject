<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function show()
       {
         $user = \Auth::user();
         $id = \Auth::user()->id;
         return view('profile/index', [ 'user' => $user ]);
       }
}
