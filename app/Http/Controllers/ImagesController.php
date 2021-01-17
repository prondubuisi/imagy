<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\DeleteImageRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

use App\Models\Images;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Images::latest()->get();
        return view('home', compact('images'));
    }

    public function searchImage(Request $request){

        if($request->ajax()){
   
            $output="";
            $images = Images::where('tags','LIKE','%'.$request->search."%")->latest()->get();
    
            if($images){
         
               foreach ($images as  $image) {
               
                $route = route("imagepreview", $image->id);
                $output .= <<<eot

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="$image->url" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>$image->title</h2>
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

    public function authenticatedUsersearchImage(Request $request){

        if($request->ajax()){
   
            $output="";
            $images = Images::where('user_id', Auth::id())
                ->where('tags','LIKE','%'.$request->search."%")->latest()->get();
    
            if($images){
         
               foreach ($images as  $image) {
               
                $route = route("imagepreview", $image->id);
                $output .= <<<eot

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="$image->url" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>$image->title</h2>
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

    public function viewDashboard()
    {
        $images = Images::where('user_id', Auth::id())->latest()->get();
        return view('dashboard', compact('images'));
    }

    public function storeImage(StoreImageRequest $request)
    {
        $validated = $request->validated();

        try {
            $uploadedImageUrl = $request->file('image')->storeOnCloudinary('imagy')->getSecurePath();
            $userID = Auth::id();

            $image = new Images();
            $image->user_id = $userID;
            $image->url = $uploadedImageUrl;
            $image->title = $request->post('title');
            $image->description = $request->post('description');
            $image->tags = $request->post('tags');
            $image->save();

            return redirect('dashboard')->with('message', 'Image uploaded sucessfully');
        }catch(Exception $exception){
            return back()->withErrors('Error',"Something went bad, please try again");
        }
        
    }
    public function deleteImage(DeleteImageRequest $request){

        $validated = $request->validated();

        $userID = Auth::id();
        $imageId = $request->post('imageid');
        $image = Images::find($imageId);
    
        if(isset($image->user_id) && $image->user_id == $userID )
        {
            $image->delete();
            return redirect('dashboard')->with('message', 'Image deleted sucessfully');
        }

        return redirect('dashboard')->with('error', 'You are not authorized to delete this image');


        
        
    }
}
