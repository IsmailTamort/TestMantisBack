<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantisBugTagTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mantis_bug_tag_table')->insert([
            [
                'bug_id' => 6,
                'tag_id' => 1,
                'user_id' => 1,
                'date_attached' => 1593188201,
            ],
            [
                'bug_id' => 6,
                'tag_id' => 2,
                'user_id' => 1,
                'date_attached' => 1593188201,
            ],

        ]);
    }
}
