<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'My first Laravel blog',
            'content' => 'This is my placeholder content.'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'My second seeded post',
            'content' => 'This is my placeholder content.'
        ]);
        $post->save();
    }
}
