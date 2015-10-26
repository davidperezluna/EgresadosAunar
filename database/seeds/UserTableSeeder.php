<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name'=> 'david',
            'role'=> 'admin',
            'email'=>'david.perez.udenar@gmail.com',
            'password'=> bcrypt('newblood')
        ]);
        factory(App\User::class, 49)->create();

    }
}
