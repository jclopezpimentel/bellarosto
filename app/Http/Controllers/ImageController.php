<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller{
    public function uploadImage(Request $request){
    	if ($request->hasFile('pathImage')) {
    		$file = $request->file('pathImage');
    		$name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/img/', $name);
    		$imageVisibility = $request->imageVisibility;
    		
            if (is_null($imageVisibility)) {
    			$imageVisibility = "True";
    		}

	    	$datos = new Image;
			$datos->imageName = $request->imageName;
			$datos->pathImage = $name;
			$datos->imageVisibility = $imageVisibility;
			$datos->id_categories = $request->id_categories;
			$datos->save();
    		return "Success";
    	}else{
    		return "alskdjs";
    	}
    }
}
