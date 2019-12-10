<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'ryo',
                'email' => 'aaa@a.com',
                'email_verified_at' => Carbon::now(),
                'password' => 'abcdefgh',
                'job' => 'エンジニア',
                'remember_token' => 'aaaaaaaaaa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
