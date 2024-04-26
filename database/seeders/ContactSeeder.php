<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->email(),
            'subject' => fake()->realText(30),
            'age' => fake()->randomNumber(2),
            'message' => fake()->realText(80),
        ]);
    }
}
