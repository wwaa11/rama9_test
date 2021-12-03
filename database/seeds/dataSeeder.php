<?php

use Illuminate\Database\Seeder;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data')->insert([
                [
                'name' => 1,
                'build' => 1,
                'depart' => 1,
                'tel' => 1,
                ]
        ]);
    }
}
