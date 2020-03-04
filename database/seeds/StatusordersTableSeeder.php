<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statusorders')->insert([
            ['name' => 'PENDING'],
            ['name' => 'ASSIGNED'],
            ['name' => 'ON ROUTE'],
            ['name' => 'DONE'],
            ['name' => 'CANCELLED'],
        ]);
    }
}
