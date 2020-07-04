<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::firstOrCreate(
            ['name' => 'admin'],
            [
                'email'=>'admin@localhost.com',
                'password' => Hash::make('admin')
            ]
    );
    }
}
