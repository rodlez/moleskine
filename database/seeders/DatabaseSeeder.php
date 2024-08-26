<?php

namespace Database\Seeders;

// Models
use App\Models\User;
use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::factory()->create([
            'id' => 3,
            'name' => 'Rodolfo',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678')
        ]);

        // Will create 100 entries for Note as has been define in the NoteFactory class
        Note::factory(150)->create();
    }
}
