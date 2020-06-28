<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_user = [
            [
                'user_id' => 3,
                'job_id' => 5,
                'employer_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 5,
                'job_id' => 5,
                'employer_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 7,
                'job_id' => 1,
                'employer_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('job_user')->insert($job_user);
    }
}
