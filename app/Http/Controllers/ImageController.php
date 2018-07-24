<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller{
    public function uploadImage(Request $request){
        $type = $request->pathImage->extension();
        $size = ($request->pathImage->getClientSize()) / 1024;
        $isValid = $request->pathImage->isValid();

    	if ($request->hasFile('pathImage') && $isValid ) {
            if ($type == "png" ||  $type == "jpeg" ||  $type == "jpe" ||  $type == "jpg" ||  $type == "gif"){
                if ($size <= 5120) {
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
                    return "Tamaño Sobrepasado ".$size ;
                }
            }else{
                return "Tipo de archivo no válido " .$type;
            }
     	}else{
    		return "Fail request" .$isValid;
    	}
        return $size;
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

    public function carouselCategory(Request $request){
        $idCategory = $request->idCategory;
        if ($idCategory == '0') {
            $images = Image::where('imageVisibility','False')->get();
        }else{
            $images = Image::where('id_categories',$idCategory)->get();
        }
        return view('sections.carousel',compact('images'));
    }
}
