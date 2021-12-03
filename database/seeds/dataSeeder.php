<?php

use Illuminate\ Database\ Seeder;

class dataSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public
    function run() {
        //
        DB::table('data')->insert([
            [
                'name' => 'Syeda',
                'build' => 'A',
                'depart' => 'Doctor',
                'tel' => '6622582664',
            ],
            [
                'name' => 'Fern',
                'build' => 'A',
                'depart' => 'Doctor',
                'tel' => '0294853114',
            ],
            [
                'name' => 'Gabriella',
                'build' => 'A',
                'depart' => 'Doctor',
                'tel' => '0819459162',
            ],
            [
                'name' => 'Khadija',
                'build' => 'B',
                'depart' => 'Marketing',
                'tel' => '6625863213',
            ],
            [
                'name' => 'Khadija',
                'build' => 'B',
                'depart' => 'Marketing',
                'tel' => '6624511433',
            ],
        ]);
    }
}
