<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fredy Barboza',
            'email' => 'barbozafredy8@gmail.com',
            'password' => bcrypt('11111')
        ]);

        //User::factory(99)->create();
    }
}
