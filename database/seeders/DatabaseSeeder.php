<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Sport',
        'Tecnologia',
        'Musica',
        'Cinema',
        'Arte',
        'Viaggi',
        'Cucina',
        'Salute',
        'Scienza',
        'Moda'
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'Klillo@gmail.com',
        // ]);

        foreach($this->categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
    }
}
