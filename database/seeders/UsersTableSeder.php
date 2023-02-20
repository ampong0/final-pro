<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
             'team' => 1,

        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'team' => 2,
        ]);

    }
}
