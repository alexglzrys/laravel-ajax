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
        // Fabricar 12 usuarios falsos en la base de datos
        factory(User::class, 12)->create();
    }
}
