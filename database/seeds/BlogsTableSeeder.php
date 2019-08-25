<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postTitle = ['Blog de prueba 1', 'Blog de prueba 2', 'Blog de prueba 3'];
        $postImage = ['/images/thumbnails/swords/1.jpg', '/images/thumbnails/swords/2.jpg', '/images/thumbnails/swords/3.jpg'];
        $postDescription = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        for ($i = 0; $i < count($postTitle); $i++) {
            factory(Blog::class)->create([
                'title' => $postTitle[$i],
                'path_to_image' => $postImage[$i],
                'description' => $postDescription
            ]);
        }
    }
}
