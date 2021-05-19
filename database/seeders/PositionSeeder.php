<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position')->insert([
            'position_name' => 'Manajer',
        ]);
        DB::table('position')->insert([
            'position_name' => 'HRD',
        ]);
        DB::table('position')->insert([
            'position_name' => 'Staff',
        ]);
        DB::table('position')->insert([
            'position_name' => 'Kepala Divisi',
        ]);
    }
}
