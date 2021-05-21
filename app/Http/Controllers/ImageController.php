<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Imagen;
use Image;

class ImageController extends Controller
{
    public function resizeImage()
    {
        $imagens = Imagen::all();
        return view('resize-image',compact('imagens'));
    }


    public function resizeImageSubmit(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($request->file){

    	$image = $request->file;
    	$filename = $image->getClientOriginalName();
    	$image_resize = Image::make($image->getRealPath());
    	$image_resize->resize(300,300);
    	//$image_resize->save(public_path('images/'.$filename));
        $pash = Storage::disk('public')->put('/files',$request->file('file'));  
        $New = new Imagen;  
        $New->file = $pash;           
        $New->name = $filename;
        $New->save();
        //$this->resizeImage();
    	//return "imagen subida a public y renderisada exitosamente";
       
    }
    $imagens = Imagen::all();
    return view('resize-image',compact('imagens'));
    }
}
