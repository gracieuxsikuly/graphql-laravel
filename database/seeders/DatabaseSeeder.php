<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Appel des factories pour générer des utilisateurs, des publications et des commentaires aléatoires
        User::factory(4)->create(); // Crée 4 utilisateurs
        Post::factory(10)->create(); // Crée 10 publications
        Comment::factory(10)->create(); // Crée 10 commentaires
    }
}
