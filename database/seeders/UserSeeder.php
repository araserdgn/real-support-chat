<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'İsmail Erdogan',
            'email' => 'iso@gmail.com',
            'password' => bcrypt(741852963),
            'avatar' => 'iso.jpg'
        ]);

        User::create([
            'name' => 'Aleyna Akbulut',
            'email' => 'aleyna@gmail.com',
            'password' => bcrypt(741852963),
            'avatar' => 'aleyna.jpg'
        ]);

        foreach (range(1,15) as $i) {
            User::factory()->create();
        }
    }
}
