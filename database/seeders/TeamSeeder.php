<?php

namespace Database\Seeders;
Use DB;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
             'id' => 1,
            'name' => 'team1',
           
           
        ]);


    }
}
