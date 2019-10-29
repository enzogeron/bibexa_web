<?php

use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category = new Category;
        $category->name = 'Fisica';
        $category->save();
        $category = new Category;
        $category->name = 'Matematica';
        $category->save();
        $category = new Category;
        $category->name = 'Quimica';
        $category->save();
        $category = new Category;
        $category->name = 'Informatica';
        $category->save();

        $post = new Post;
        $post->title = 'Primer Post';
        $post->url = str_slug('Primer Post');
        $post->excerpt = 'Algun texto corto';
        $post->body = '<p>Lorem ipsum lorem lorem lorem lorem</p>';
        $post->published_at = Carbon::now();
        $post->category_id = rand(1, 4);
        $post->save();

        $post = new Post;
        $post->title = 'Segundo Post';
        $post->url = str_slug('Segundo Post');
        $post->excerpt = 'Algun texto corto';
        $post->body = '<p>Lorem ipsum lorem lorem lorem lorem</p>';
        $post->published_at = Carbon::now();
        $post->category_id = rand(1, 4);
        $post->save();

        $post = new Post;
        $post->title = 'Tercer Post';
        $post->url = str_slug('Tercer Post');
        $post->excerpt = 'Algun texto corto';
        $post->body = '<p>Lorem ipsum lorem lorem lorem lorem</p>';
        $post->published_at = Carbon::now();
        $post->category_id = rand(1, 4);
        $post->save();


        $post = new Post;
        $post->title = 'Cuarto Post';
        $post->url = str_slug('Cuarto Post');
        $post->excerpt = 'Algun texto corto';
        $post->body = '<p>Lorem ipsum lorem lorem lorem lorem</p>';
        $post->published_at = Carbon::now();
        $post->category_id = rand(1, 4);
        $post->save();

        $post = new Post;
        $post->title = 'Quinto Post';
        $post->url = str_slug('Quinto Post');
        $post->excerpt = 'Algun texto corto';
        $post->body = '<p>Lorem ipsum lorem lorem lorem lorem</p>';
        $post->published_at = Carbon::now();
        $post->category_id = rand(1, 4);
        $post->save();
   }
}
