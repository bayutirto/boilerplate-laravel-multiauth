<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'nama' => 'Mr.Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'nama' => 'Mr.User',
            'email' => 'user@user.com',
            'password' => bcrypt('rootuser'),
        ]);
    }
}
