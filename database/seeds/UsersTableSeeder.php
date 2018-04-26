<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'username' => 'Seeder',
                'firstname' => 'Test',
                'lastname' => 'Seed',
                'adress' => 'No',
                'postal_code' => '91000',
                'city' => 'No',
                'mobile' => '0123456789',
                'email' => 'seeder@seeder.seeder',
                'set_avatar' => false,
                'password' => bcrypt('seeder'),
            ]);
        User::create([
                'username' => 'Tester',
                'firstname' => 'Test',
                'lastname' => 'Test',
                'adress' => 'No',
                'postal_code' => '91000',
                'city' => 'No',
                'mobile' => '0123456789',
                'email' => 'test@test.test',
                'set_avatar' => false,
                'password' => bcrypt('test04'),
            ]);
    }
}
  
 