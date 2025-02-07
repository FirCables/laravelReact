<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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

        $categories = [
          
                ['name' => 'alkatresz'],
                ['name' => 'külső kiegészítő'],
                ['name' => 'belső kiegészítő']
        ];
            foreach ($categories as $category) {
                Category::create($category);
        
    }
    }
}