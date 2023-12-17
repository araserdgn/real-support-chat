<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
            'sender_id' =>1,
            'receiver_id' =>2,
            'message' => "Hİ, what's up?",
        ]);
        Chat::create([
            'sender_id' =>2,
            'receiver_id' =>1,
            'message' => "I'm fine, and you?",
        ]);
        Chat::create([
            'sender_id' =>1,
            'receiver_id' =>2,
            'message' => "fine, What did you do the last day?",
        ]);
        Chat::create([
            'sender_id' =>2,
            'receiver_id' =>1,
            'message' => "anything. I was just listening the music.",
        ]);
    }
}
