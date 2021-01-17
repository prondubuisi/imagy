<?php

namespace Database\Seeders;

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
        $imageData = [
            ['user_id' => 1, 'name'=>'Europe man', 'description' => 'A man on the streets of Europe licking sweets', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487828/imagy/people-4.jpg', 'tags' => 'man europe street licking sweet', 'price' => 50, 'quantity' => 5],
            ['user_id' => 1, 'name'=>'Smiling man', 'description' => 'Smiling man with glasses and curled hair', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487828/imagy/people-3.jpg', 'tags' => 'man smiling glasses hair', 'price' => 20, 'quantity' => 6],
            ['user_id' => 2, 'name'=>'Purple reeds', 'description' => 'Under sea purple reed', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487828/imagy/img-14.jpg', 'tags' => 'Purple reeds under water river bed ocean', 'price' => 10, 'quantity' => 20],
            ['user_id' => 2, 'name'=>'Dark boat', 'description' => 'Boat with two paddles pictured on river at sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-13.jpg', 'tags' => 'boat river sunset paddle dark', 'price' => 100, 'quantity' => 30],
            ['user_id' => 3, 'name'=>'Black man', 'description' => 'Black man smiling on suit', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/people-1.jpg', 'tags' => 'black man smiling  suit', 'price' => 50, 'quantity' => 20],
            
            ['user_id' => 4, 'name'=>'White woman', 'description' => 'White woman with highlands behind', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/people-2.jpg', 'tags' => 'white woman highlands behind', 'price' => 50, 'quantity' => 20],
            ['user_id' => 4, 'name'=>'White swan', 'description' => 'White swan in blue river', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/hero.jpg', 'tags' => '', 'price' => 30, 'quantity' => 50],
            ['user_id' => 2, 'name'=>'Peace people', 'description' => 'Peace writing with flowers on the ground', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487827/imagy/img-16.jpg', 'tags' => '', 'price' => 200, 'quantity' => 50],
            ['user_id' => 3, 'name'=>'Sea turtle', 'description' => 'Sea Turtle swimming in beatiful blue river', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-15.jpg', 'tags' => '', 'price' => 200, 'quantity' => 40],
            ['user_id' => 1, 'name'=>'Abstract brown', 'description' => 'Abstract brown image of mountain and valley', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-12.jpg', 'tags' => '', 'price' => 50, 'quantity' => 30],
            ['user_id' => 4, 'name'=>'Love flower', 'description' => 'Rose flower says I love you', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-11.jpg', 'tags' => '', 'price' => 50, 'quantity' => 20],
                        ['user_id' => 5, 'name'=>'Abstract art work', 'description' => 'Art work with blue red paintings', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-09.jpg', 'tags' => 'abstract image painting art work', 'price' => 100, 'quantity' => 5],
            ['user_id' => 2, 'name'=>'Tree branch', 'description' => 'Tree branch in sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-10.jpg', 'tags' => 'tree branch sunset', 'price' => 100, 'quantity' => 6],
            ['user_id' => 3, 'name'=>'Sky scrapper', 'description' => 'City of new york skye scraper view by sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-08.jpg', 'tags' => 'sky scrapper building holiday new york', 'price' => 100, 'quantity' => 30],
            ['user_id' => 2, 'name'=>'All green', 'description' => 'Green grass and trees in garden', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-05.jpg', 'tags' => 'garden green grass trees flower', 'price' => 200, 'quantity' => 30],
            ['user_id' => 1, 'name'=>'Flower vase', 'description' => 'Green flowers in white vase', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-04.jpg', 'tags' => 'green white flower vase decoration', 'price' => 300, 'quantity' => 3],
            ['user_id' => 1, 'name'=>'Yellow bus', 'description' => 'Yellow bus with passenger lauggage', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-07.jpg', 'tags' => 'yellow bus bags luggage travle', 'price' => 100, 'quantity' => 30],
            ['user_id' => 3, 'name'=>'Perfumes everywhere', 'description' => 'Four perfumes on woolen material', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-02.jpg', 'tags' => 'perfume woolen four clothing material', 'price' => 400, 'quantity' => 30],

            ['user_id' => 5, 'name'=>'Abstract art work', 'description' => 'Art work with blue red paintings', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-09.jpg', 'tags' => 'abstract image painting art work', 'price' => 100, 'quantity' => 5],
            ['user_id' => 2, 'name'=>'Tree branch', 'description' => 'Tree branch in sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-10.jpg', 'tags' => 'tree branch sunset', 'price' => 100, 'quantity' => 6],
            ['user_id' => 3, 'name'=>'Sky scrapper', 'description' => 'City of new york skye scraper view by sunset', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487826/imagy/img-08.jpg', 'tags' => 'sky scrapper building holiday new york', 'price' => 100, 'quantity' => 30],
            ['user_id' => 2, 'name'=>'All green', 'description' => 'Green grass and trees in garden', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-05.jpg', 'tags' => 'garden green grass trees flower', 'price' => 200, 'quantity' => 30],
            ['user_id' => 1, 'name'=>'Flower vase', 'description' => 'Green flowers in white vase', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-04.jpg', 'tags' => 'green white flower vase decoration', 'price' => 300, 'quantity' => 3],
            ['user_id' => 1, 'name'=>'Yellow bus', 'description' => 'Yellow bus with passenger lauggage', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-07.jpg', 'tags' => 'yellow bus bags luggage travle', 'price' => 100, 'quantity' => 30],
            ['user_id' => 3, 'name'=>'Perfumes everywhere', 'description' => 'Four perfumes on woolen material', 'url' => 'https://res.cloudinary.com/ndubuisi/image/upload/v1610487825/imagy/img-02.jpg', 'tags' => 'perfume woolen four clothing material', 'price' => 400, 'quantity' => 30],`
        ];

        DB::table('images')->insert($imageData);
    }
}
