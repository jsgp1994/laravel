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
        factory(User::class,29)->create();
        User::create([
            'name' => 'Juan sebastian',
            'email' => 'jsgp_1994@hotmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
