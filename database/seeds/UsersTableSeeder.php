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
        $user = new User([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => bcrypt('password')
        ]);

        $user->save();

        $user2 = new User([
            'name' => 'Jane Doe',
            'email' => 'jane@gmail.com',
            'password' => bcrypt('password')
        ]);

        $user2->save();
    }
}
