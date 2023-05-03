<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tags = ['sport', 'cultura', 'natura', 'politica', 'musica', 'intrattenimento'];

        foreach ($tags as $tagName) {
            // ! 1 prima volta crea un record sul database con name = sport
            // ! 2 prima volta crea un record sul database con name = cultura
            // ! ...
            Tag::create([
                'name' => $tagName
            ]);
        }

    }
}
