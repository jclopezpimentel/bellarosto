<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrator;
use DB;
use Input;
use App\Category;
use App\Image;

class AdministratorController extends Controller
{

  public function principal(){
    $categories = Category::all();
    $images = Image::all();

    $idCategories = Category::pluck('id');

    return view('welcome',compact('categories','images','idCategories'));
  }

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
    $images = Image::all();

//    $images = Image::with('category')->get();

    return view('administrator.dashboard',compact('categories','images'));
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

    $checkImages = Image::where('id_categories',$idCategory)->exists(); 
    if ($checkImages){
      return "Fail";
    }
    $Category->delete();

    return "1";
  }

}
