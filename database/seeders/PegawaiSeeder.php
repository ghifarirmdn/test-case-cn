<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            'project_name' => 'website',
            'client' => 'satar',
            'project_leader' => 'ghifari',
            'start_date' => Carbon::today(),
            'end_date' => Carbon::today(),
            'progress' => rand(1,100),
        ]);
    }
}
