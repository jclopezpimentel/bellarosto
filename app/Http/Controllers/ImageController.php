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
    		return "Fail request";
    	}
    }

    public function deleteImage(Request $request){
        $idImage = $request['idImage'];

        $image = Image::findOrFail($idImage);
        
        $image->delete();

        return "Success";
    }

    public function updateVisibilityImage(Request $request){
        $idImage = $request['idImage'];
        $imageVisibility = Image::where('id',$idImage)->pluck('imageVisibility')[0];
        $image = Image::findOrFail($idImage);
 
        if ($imageVisibility == 'False') {
            $image->imageVisibility ='True';
            $image->save();
        }else{
            $image->imageVisibility ='False';
            $image->save();
        }        

        return $imageVisibility;
    }
}
