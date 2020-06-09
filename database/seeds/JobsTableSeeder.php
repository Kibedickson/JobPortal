<?php

use App\Jobs;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'id' =>1,
                'job_title'=> 'Web Developer',
                'job_location' => 'Nairobi',
                'job_description' => 'Lorem ipsum lorem ipsum',
                'job_category' => 'Programming',
                'job_deadline' => now(),
            ]
        ];

        Jobs::insert($jobs);

    }
}
