<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class partseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'partnumber' => 'RAW-01001-001',
            'name' => 'Screw',
            'UM' => 'US',
        ]);

        DB::table('admin')->insert([
            'partnumber' => 'RAW-01002-002',
            'name' => 'Screw2',
            'UM' => 'US',
        ]);
    }
}
