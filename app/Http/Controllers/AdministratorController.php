<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrator;
use DB;
use Input;
use App\Category;

class AdministratorController extends Controller
{
  public function checkUser(Request $request){

    $username = $request['username'];
    $password = $request['password'];
    $i=0;
    $user = Administrator::where('name',$username)->where('password',$password)->exists();

    if ($user){
    	$i = 1;
    }

    return $i;

  }

  public function dashboard(){
    $categories = Category::all();

    return view('administrator.dashboard',compact('categories'));
  }

  public function saveCategory(Request $request){
    $categoryName = $request['categoryName'];

    $category = new Category;
    $category->name = $categoryName;
    $category->save();

    return "success";

  }

  public function deleteCategory(Request $request){
    $idCategory = $request['idCategory'];

    $Category = Category::findOrFail($idCategory);
    
    $Category->delete();

    return "Success";
  }
}
