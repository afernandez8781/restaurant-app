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
        $user = new User;
        $user->name = 'Alfredo';
        $user->email = 'alfredo@ceanla.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
