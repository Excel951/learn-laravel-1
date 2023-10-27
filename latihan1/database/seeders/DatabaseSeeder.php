<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Alpha',
        //     'email' => 'alpha@example.com',
        //     'password' => bcrypt('alpha'),
        // ]);

        // User::create([
        //     'name' => 'Beta',
        //     'email' => 'beta@example.com',
        //     'password' => bcrypt('beta'),
        // ]);

        Category::create([
            'name' => 'Web Developer',
            'slug' => 'web-developer'
        ]);

        Category::create([
            'name' => 'Mobile Developer',
            'slug' => 'mobile-developer'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // for ($i = 1; $i < 11; $i++) {
        //     Post::create([
        //         'category_id' => rand(1, 3),
        //         'user_id' => rand(1, 2),
        //         'title' => 'Judul ke ' . $i,
        //         'slug' => 'judul-ke-' . $i,
        //         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo debitis necessitatibus maiores ab eligendi doloribus voluptates voluptatum aut, ut iure laborum voluptatem illo. Consectetur nobis doloribus consequuntur quisquam reprehenderit',
        //         'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo debitis necessitatibus maiores ab eligendi doloribus voluptates voluptatum aut, ut iure laborum voluptatem illo. Consectetur nobis doloribus consequuntur quisquam reprehenderit fugit vitae et commodi, illo harum quas at accusantium quos necessitatibus animi facilis impedit repudiandae, neque, tenetur dignissimos deleniti alias? Velit, vel eligendi fugit voluptatum iusto, adipisci quis sunt atque ratione provident eos fugiat, quos necessitatibus laborum fuga veniam iure repellat voluptatem magnam facilis quidem temporibus ut? Quasi laboriosam in a modi harum dignissimos mollitia voluptatum fugiat, facilis labore delectus sequi ratione est nisi cumque praesentium! Praesentium eum nobis consectetur suscipit.'
        //     ]);
        // }
    }
}
