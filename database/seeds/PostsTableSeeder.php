<?php

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
        $posts = [
        ['title'=>'Tips Cepet Nikah', 'content'=>'lorem ipsum'],
        ['title'=>'Haruskah Manusia Menikah?','content'=>'lorem ipsum'],
        ['title'=>'Membangun Visi Misi Menikah','content'=>'lorem ipsim' ]
        ];
        DB::table('posts')->insert($posts);
    }
}
