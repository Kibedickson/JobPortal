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
                'employer_id'=>'1',
                'title'=> 'Web Developer',
                'location' => 'Nairobi',
                'description' => 'Lorem ipsum lorem ipsum',
                'category' => 'Programming',
                'deadline' => now(),
            ],
            [
                'id' => 2,
                'employer_id'=>'2',
                'title'=> 'Web Developer',
                'location' => 'Nairobi',
                'description' => 'Lorem ipsum lorem ipsum',
                'category' => 'Programming',
                'deadline' => now(),
            ]

        ];

        Jobs::insert($jobs);

    }
}
