<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supervisor')->insert([
            'name' => 'Dian',
            'position' => 'Kepala Divisi',
        ]);
        DB::table('supervisor')->insert([
            'name' => 'Caur',
            'position' => 'Kepala Pabrik',
        ]);
        DB::table('supervisor')->insert([
            'name' => 'Sule',
            'position' => 'Direktur Pemasaran',
        ]);
        DB::table('supervisor')->insert([
            'name' => 'Andre',
            'position' => 'Kepala HRD',
        ]);
    }
}
