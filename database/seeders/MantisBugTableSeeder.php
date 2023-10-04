<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantisBugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('mantis_bug_table')->insert([
            [
                'id' => 1,
                'project_id' => 1,
                'reporter_id' => 1,

            ],
            [
                'id' => 2,
                'project_id' => 1,
                'reporter_id' => 1,

            ],

        ]);
    }
}
