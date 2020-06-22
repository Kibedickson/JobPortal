<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
                 UsersTableSeeder::class,
                 JobsTableSeeder::class,
                 RolesTableSeeder::class
         ]
         );
        $roles_user =[
            [
                'user_id' => '1',
                'roles_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'roles_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '3',
                'roles_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '4',
                'roles_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '5',
                'roles_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '6',
                'roles_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '7',
                'roles_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '8',
                'roles_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '9',
                'roles_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'roles_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('roles_user')->insert($roles_user);
    }
}
