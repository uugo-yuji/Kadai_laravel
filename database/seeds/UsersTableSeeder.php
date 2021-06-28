<?php

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
        DB::table('users')->insert([
            [
                'name' => 'test_user',
                'email' => 'test@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'test_user2',
                'email' => 'test2@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'test_user3',
                'email' => 'test3@test.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}

