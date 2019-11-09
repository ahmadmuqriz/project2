<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::table ('users')->insert([
            'name'=> 'Ahmad Muqri Bin Ahmad Badri',
            'email'=>'ahmadmuqriz95@gmail.com',
            'password'=>bcrypt('password'),
        ]);


        DB::table ('users')->insert([
            'name'=> 'Ahmad Badri Bin Abu Bakar',
            'email'=>'badriburn67@gmail.com',
            'password'=>bcrypt('password'),
        ]);

    }
}
