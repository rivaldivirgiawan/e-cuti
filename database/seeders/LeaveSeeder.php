<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leave')->insert([
            'employee_id' => 4,
            'leave_type_id' => 2,
            'reason' => 'Sakit',
            'period_start' => Carbon::create('2021', '03', '03'),
            'period_end' => Carbon::create('2021','03', '07'),
            'days' => 5,
            'address' => 'Bali',
            'phone' => '08521234563',
            'supervisor_id' => 2,
            'status' => 0,
            'status_approval' => 1,
        ]);
    }
}
