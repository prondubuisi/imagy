<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
       $adminUser = ['name' => 'Ndubuisi Onyemenam', 'email' => 'me@shopify.com', 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'];
       DB::table('users')->insert($adminUser);

       User::factory()
            ->count(10)
            ->create();

        $imageData = [
            ['user_id' => 1, 'title'=>'Europe man', 'description' => 'A man on the streets of Europe licking sweets', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487828/imagy/people-4.jpg', 'tags' => 'man europe street licking sweet'],
            ['user_id' => 1, 'title'=>'Smiling man', 'description' => 'Smiling man with glasses and curled hair', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487828/imagy/people-3.jpg', 'tags' => 'man smiling glasses hair'],
            ['user_id' => 2, 'title'=>'Purple reeds', 'description' => 'Under sea purple reed', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487828/imagy/img-14.jpg', 'tags' => 'Purple reeds under water river bed ocean'],
            ['user_id' => 2, 'title'=>'Dark boat', 'description' => 'Boat with two paddles pictured on river at sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-13.jpg', 'tags' => 'boat river sunset paddle dark'],
            ['user_id' => 3, 'title'=>'Black man', 'description' => 'Black man smiling on suit', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/people-1.jpg', 'tags' => 'black man smiling  suit'],
            
            ['user_id' => 4, 'title'=>'White woman', 'description' => 'White woman with highlands behind', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/people-2.jpg', 'tags' => 'white woman highlands behind'],
            ['user_id' => 2, 'title'=>'Peace people', 'description' => 'Peace writing with flowers on the ground', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/img-16.jpg', 'tags' => 'flowers ground peace people beach sand writing'],
            ['user_id' => 3, 'title'=>'Sea turtle', 'description' => 'Sea Turtle swimming in beatiful blue river', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-15.jpg', 'tags' => 'sea turtle beatiful river'],
            ['user_id' => 1, 'title'=>'Abstract brown', 'description' => 'Abstract brown image of mountain and valley', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-12.jpg', 'tags' => 'abstract painting brown image mountain'],
            ['user_id' => 4, 'title'=>'Love flower', 'description' => 'Rose flower says I love you', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-11.jpg', 'tags' => 'rose flower love you'],
            ['user_id' => 5, 'title'=>'Abstract art work', 'description' => 'Art work with blue red paintings', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-09.jpg', 'tags' => 'abstract image painting art work'],
            ['user_id' => 2, 'title'=>'Tree branch', 'description' => 'Tree branch in sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-10.jpg', 'tags' => 'tree branch sunset'],
            ['user_id' => 3, 'title'=>'Sky scrapper', 'description' => 'City of new york skye scraper view by sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-08.jpg', 'tags' => 'sky scrapper building holiday new york'],
            ['user_id' => 2, 'title'=>'All green', 'description' => 'Green grass and trees in garden', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-05.jpg', 'tags' => 'garden green grass trees flower'],
            ['user_id' => 1, 'title'=>'Flower vase', 'description' => 'Green flowers in white vase', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-04.jpg', 'tags' => 'green white flower vase decoration'],
            ['user_id' => 1, 'title'=>'Yellow bus', 'description' => 'Yellow bus with passenger lauggage', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-07.jpg', 'tags' => 'yellow bus bags luggage travle'],
            ['user_id' => 3, 'title'=>'Perfumes everywhere', 'description' => 'Four perfumes on woolen material', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-02.jpg', 'tags' => 'perfume woolen four clothing material'],

            ['user_id' => 5, 'title'=>'Abstract art work', 'description' => 'Art work with blue red paintings', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-09.jpg', 'tags' => 'abstract image painting art work'],
            ['user_id' => 2, 'title'=>'Tree branch', 'description' => 'Tree branch in sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-10.jpg', 'tags' => 'tree branch sunset'],
            ['user_id' => 3, 'title'=>'Sky scrapper', 'description' => 'City of new york skye scraper view by sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-08.jpg', 'tags' => 'sky scrapper building holiday new york'],
            ['user_id' => 2, 'title'=>'All green', 'description' => 'Green grass and trees in garden', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-05.jpg', 'tags' => 'garden green grass trees flower'],
            ['user_id' => 1, 'title'=>'Flower vase', 'description' => 'Green flowers in white vase', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-04.jpg', 'tags' => 'green white flower vase decoration'],
            ['user_id' => 1, 'title'=>'Yellow bus', 'description' => 'Yellow bus with passenger lauggage', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-07.jpg', 'tags' => 'yellow bus bags luggage travle'],
            ['user_id' => 3, 'title'=>'Perfumes everywhere', 'description' => 'Four perfumes on woolen material', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-02.jpg', 'tags' => 'perfume woolen four clothing material'],
        ];
        DB::table('images')->insert($imageData);
    }
}
