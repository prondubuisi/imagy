<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagy</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">

<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <i class="fas fa-film mr-2"></i>
                Imagy
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="{{route('home')}}">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="{{route('uploadimage')}}">Upload Photo</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="{{route('login')}}">Login</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link nav-link-1" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-responsive-nav-link>
                    </form>
                @endauth
               </li>
            </ul>
                
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">

        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" id="searchfield" type="search" placeholder="Search for more images" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" id="searchbutton" type="button">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="row tm-mb-90 tm-gallery" id="gallerybody">
        <div class="container-fluid tm-container-content tm-mt-60" >
            <div class="row mb-4">
                <h2 class="col-12 tm-text-primary">{{$image->title}}</h2>
            </div>
            <div class="row tm-mb-90">            
                <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                    <img src="{{$image->url}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="tm-bg-gray tm-video-details">
                        
                        <div class="text-center mb-5">
                            <a href="{{$image->url}}" class="btn btn-primary tm-btn-big" download="{{$image->name}}" target="_blank">Download</a>
                        </div>  
                        @if(Auth::id() == $image->user_id)
                        <div class="text-center mb-5">
                            
                            <form method="POST" action="{{ route('deleteimage') }}">
                            @csrf

                            <a :href="" class="btn btn-danger tm-btn-big"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                Delete Image
                            </a>
                            <input type="hidden" name="imageid" value="{{$image->id}}"> </input>
                            </form>
                        </div>  
                        @endif
         
                        <div class="mb-4">
                            <h3 class="tm-text-gray-dark mb-3">Description</h3>
                            <h4 class="tm-text-dark mb-3">{{$image->description}}</h4>
                        </div>
                        <div>
                            <h4 class="tm-text-gray-dark mb-3">Tags</h4>
                            {{$image->tags}}

                        </div>
                    </div>
                </div>
            </div>
                    
            </div> <!-- row -->
        </div> <!-- container-fluid, tm-container-content -->
    </div>

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 Imagy Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
                </div>
            </div>
        </div>
    </footer>    
    <script>
        
       
        const searchField = document.getElementById('searchfield');
        const searchButton = document.getElementById('searchbutton')
        const galleryBody = document.getElementById('gallerybody');
        function getContent(){
        
        const searchValue = searchField.value;
        
            if(searchValue != ""){
                const xhr = new XMLHttpRequest();
                xhr.open('GET','{{route('search')}}/?search=' + searchValue ,true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function() {
                    
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {   
                        galleryBody.innerHTML = xhr.responseText;
                    }
                }
                xhr.send()
            }
            
        }
        searchField.addEventListener('input',getContent);
        searchButton.addEventListener('click',getContent);
       

    </script>
</body>
</html>