# Imagy
Image Repository Example for  Shopify Developer Intern Challenge 
# Test Credentials
* Url: [Imagy](http://shopifyimagy.herokuapp.com/)
* Login email: `me@shopify.com`
* Login password: `password`

# Guest Actions
* Search for images
* Preview images
* Download images
* Register
* Login

# Authenticated User Action
* Go to dashboard
* Search for user uploaded images within dashboard
* Upload image
* Delete images(soft delete)
* Logout 

# Architecture 
* Model View Controller(MVC)

## Frontend
* HTML, CSS, Bootstrap, Javascript, Ajax, Laravel blade

## Backend
* PHP, Laravel
* Database, MySQL(local), db4free.net(remote host)
* Content delivery network, cloudinary.com
* Host, local server, heroku.com

# Setup
- This is a [Laravel](https://laravel.com/docs/8.x) application, so you need to have [PHP](https://www.apachefriends.org/index.html), [Composer](https://getcomposer.org/doc/00-intro.md) and [MySQL](https://www.apachefriends.org/index.html) installed 
- Clone this repository locally
- Run `composer install` to install app dependencies
- Create a table in your database called `Products`
- Make a copy of .env.example, save the copy as .env 
- Edit the database section of your newly created .env file to match your database credentials
- Run `php artisan migrate --seed` to migrate and seed required database tables
- Run `php artisan key:generate` to generate a unique key for your apllication
- Run `php artisan serve` and navigate to your browser to test app


