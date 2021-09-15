<?php

use Illuminate\Database\Seeder;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i++) 
        { 
            
            //creare instanza
            $newPost = new Post();

            //generare dati
            $newPost->title = 'Post numero ' . ($i +1);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->content = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt sit cum maiores repudiandae corporis velit, expedita eos quam nulla magni neque! Molestias pariatur et quia similique consequuntur ad. Vel, facere.';

            //salvare i dati
            $newPost->save();

        }

    }

}
