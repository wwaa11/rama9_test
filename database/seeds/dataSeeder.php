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
                'name' => 'รายรับ'.Str::random(1),
                'amount' => rand ( 1 , 1000 ),
                'type' => 'รายรับ',
                'created_at' => '2021-1-01',
                'updated_at' => '2021-1-01'
                ]
        ]);
    }
}
