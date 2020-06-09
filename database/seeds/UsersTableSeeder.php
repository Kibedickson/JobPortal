<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [

                'name' =>'Dickson',
                'email' => 'kibedickson3@gmail.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
            ],
            [

                'name' =>'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
            ],
            [

                'name' =>'Jane Doe',
                'email' => 'janedoe@gmail.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
