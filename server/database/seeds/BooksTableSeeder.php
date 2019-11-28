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
                'title' => '週4時間だけ働く',
                'author' => 'ティム・フェリス',
                'company' => '幻冬社',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.co.jp%2F%25E3%2580%258C%25E9%2580%25B1%25EF%25BC%2594%25E6%2599%2582%25E9%2596%2593%25E3%2580%258D%25E3%2581%25A0%25E3%2581%2591%25E5%2583%258D%25E3%2581%258F%25E3%2580%2582-%25E3%2583%2586%25E3%2582%25A3%25E3%2583%25A2%25E3%2582%25B7%25E3%2583%25BC%25E3%2583%25BB%25E3%2583%2595%25E3%2582%25A7%25E3%2583%25AA%25E3%2582%25B9%2Fdp%2F4905042097&psig=AOvVaw2_2QyRsbGnZyR2hX78PV1X&ust=1575005625052000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMih0qiXjOYCFQAAAAAdAAAAABAD',
                'publication_year' => '2017-11-01',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ])
    }
}
