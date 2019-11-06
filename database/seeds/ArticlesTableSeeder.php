<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title'=>'title1',
                'body'=>'内容１',
            ],
            [
                'title'=>'title2',
                'body'=>'内容２',
            ],
            [
                'title'=>'title3',
                'body'=>'内容３'
            ],
        ]);
       
    }
}
