<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            'nip' => 'K0002',
            'fullname' => 'Elon Musk',
            'gender' => 'L',
            'birthplace' => 'Los Angeles',
            'birthdate' => Carbon::create('1999','12', '12'),
            'address' => 'Teaxs',
            'phone_number' => '085212345678',
            'work_unit_id' => 1,
            'position_id' => 1,
            'entrydate' => Carbon::create('2021', '03', '03'),
            'status' => 0,
        ]);
    }
}
