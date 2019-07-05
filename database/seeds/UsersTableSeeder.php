<?php

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
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',
            'username' =>'admin',
            'email' => 'loidinh174@gmail',
            'password' => bcrypt('fuck1997'),
        ]);
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Member',
            'username' =>'Member',
            'email' => 'loidinh175@gmail',
            'password' => bcrypt('fuck1997'),
        ]);
    }
}
