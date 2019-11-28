<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('books')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('books')->insert([
            [
                'user_id' => 1,
                'title' => '週4時間だけ働く',
                'author' => 'ティム・フェリス',
                'company' => '幻冬社',
                'image_url' => 'test_url',
                'publication_year' => 2017,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
