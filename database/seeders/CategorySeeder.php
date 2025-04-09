<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Videos about the latest in tech, gadgets, and software',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'icon' => 'fas fa-laptop-code',
                'color' => '#3b82f6',
                'type' => 'video',
                'status' => 'active',
                'visibility' => 'public',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel',
                'description' => 'Explore beautiful destinations around the world',
                'image' => 'https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'icon' => 'fas fa-plane',
                'color' => '#10b981',
                'type' => 'video',
                'status' => 'active',
                'visibility' => 'public',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Food & Cooking',
                'slug' => 'food-cooking',
                'description' => 'Delicious recipes and cooking techniques',
                'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'icon' => 'fas fa-utensils',
                'color' => '#ef4444',
                'type' => 'video',
                'status' => 'active',
                'visibility' => 'public',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitness',
                'slug' => 'fitness',
                'description' => 'Workout routines and fitness tips',
                'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'icon' => 'fas fa-dumbbell',
                'color' => '#f59e0b',
                'type' => 'video',
                'status' => 'active',
                'visibility' => 'public',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Music',
                'slug' => 'music',
                'description' => 'Music performances and tutorials',
                'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'icon' => 'fas fa-music',
                'color' => '#8b5cf6',
                'type' => 'video',
                'status' => 'active',
                'visibility' => 'public',
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
