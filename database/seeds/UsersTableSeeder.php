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
    $user = App\User::create([
            'name' => 'Vin Dy',
            'email' => 'vin@dy.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/dv.png',
            'about' => 'SithLord',
            'facebook' => 'facebook.com',
            'twitter' => 'twitter.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
