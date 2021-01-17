<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Images;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Images::all();
        return view('home', compact('images'));
    }

    public function searchImage(Request $request){

        if($request->ajax()){
   
            $output="";
            $images = Images::where('tags','LIKE','%'.$request->search."%")->get();
    
            if($images){
         
               foreach ($images as  $image) {
               
                $route = route("imagepreview", $image->id);
                $output .= <<<eot

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="$image->url" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>$image->name</h2>
                            <a href="$route">View more</a>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">$image->name</span>
                        
                    </div>
                </div>
                eot;
            
               }

               return $output;
               
            }
        }
    
    }

    public function previewImage(Images $image)
    {
        
        return view('previewimage', compact('image'));
    }
}
