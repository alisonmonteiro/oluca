<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Users database seed.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \DB::table('users')->delete();

        User::create([
            'name' => 'Alison',
            'email' => 'alisonmonteiro.10@gmail.com',
            'password' => bcrypt('alison123'),
            'role' => 1,
            'status' => 1,
        ]);

        User::create([
            'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => bcrypt('maria123'),
            'role' => 2,
            'status' => 1,
        ]);
    }
}
