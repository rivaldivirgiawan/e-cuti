<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leave_type')->insert([
            'name' => 'Umum'
        ]);

        DB::table('leave_type')->insert([
            'name' => 'Tahunan'
        ]);
    }
}
