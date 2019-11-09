<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
