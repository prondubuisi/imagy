<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagy</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
   
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
               
            </ul>
            </div>
        </div>
    </nav>


    <div class="container all">
        <div class="container">
    
            <div class="row">
                <div class="col-md-6 col-md-offset-4">
                    <h3>Upload Images</h3>
                    <div>
                       
                    </div>
                    <form  method="post" action="/user/upload?_csrf=Lz0GE3cV-gjyn0TLJAvQ9JH6RZ52GkJtoQDw" novalidate enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">ImageTitle:</label>
                            <input type="text" name="title" required class="form-control" placeholder="Enter image title">
                        </div>
                        <div class="form-group">
                            <label for="title">Price:</label>
                            <input type="number" name="price" min="0" step="5" max="100" required class="form-control" placeholder="Image Price">
                        </div>
    
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" required></textarea>
                        </div>
    
                        <div class="form-group">
    
                                <input type="file" name="image" required>
                            </div>
                            <input type="hidden" name="_csrf" value="Lz0GE3cV-gjyn0TLJAvQ9JH6RZ52GkJtoQDw" required>
                           <button type="submit"  class="btn btn-primary">Upload</button>
                    </form>
    
                </div>
            </div>
    
        </div>
    
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
        </div>
    </footer>    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>