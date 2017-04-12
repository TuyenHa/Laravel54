<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		array('name'=>'Tuyeen Ha','email'=>'hatuyen1994@gmail.com','password'=>Hash::make('123456'),'remember_token'=>''),
    		]);
    }
}