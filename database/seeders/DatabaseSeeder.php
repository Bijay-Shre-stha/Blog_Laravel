<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user =User::factory()->create([
            'name'=>'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
    }
}
