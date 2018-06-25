<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrator;
use DB;
use Input;

class AdministratorController extends Controller
{
  public function checkUser(Request $request){

    $username = $request['username'];
    $password = $request['password'];

    if(Administrator::where('name',$username)->where('password',$password)->exists()){
      return "1";
    }
      return "2";

  }
}
