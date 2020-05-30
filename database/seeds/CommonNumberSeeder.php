<?php

use Illuminate\Database\Seeder;

class CommonNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CommonNumber::create([
            'direct' => "01,06",
            'house' => '59',
            'ending' => '89',
            'added_date' => date('Y-m-d'),
        ]);

        \App\CommonNumber::create([
            'direct' => "55,79",
            'house' => '08',
            'ending' => '64',
            'added_date' => date('Y-m-d'),
        ]);
    }
}
