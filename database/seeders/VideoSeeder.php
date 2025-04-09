<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $videos = [
            // Technology videos
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Introduction to Artificial Intelligence',
                'description' => 'Learn the basics of AI and machine learning concepts',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/8hPgsDHgVyM/maxresdefault.jpg',
                'tags' => 'ai,machine learning,technology',
                'duration' => '12:34',
                'resolution' => '1080p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => 'Building a Website with Laravel',
                'description' => 'Step-by-step guide to creating a website with Laravel framework',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/ImtZ5yENzgE/maxresdefault.jpg',
                'tags' => 'laravel,php,web development',
                'duration' => '23:45',
                'resolution' => '720p',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Travel videos
            [
                'user_id' => 3,
                'category_id' => 2,
                'title' => 'Bali Travel Guide 2023',
                'description' => 'Top places to visit in Bali, Indonesia',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/3zc5YMDJZuc/maxresdefault.jpg',
                'tags' => 'bali,travel,indonesia',
                'duration' => '15:20',
                'resolution' => '1080p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Hidden Gems in Japan',
                'description' => 'Discover less-known but amazing places in Japan',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/CxuiFNYnEr4/maxresdefault.jpg',
                'tags' => 'japan,travel,hidden gems',
                'duration' => '18:45',
                'resolution' => '4k',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Food & Cooking videos
            [
                'user_id' => 2,
                'category_id' => 3,
                'title' => 'Easy Pasta Carbonara Recipe',
                'description' => 'Authentic Italian pasta carbonara in 15 minutes',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/D_2ZBK3e9tU/maxresdefault.jpg',
                'tags' => 'pasta,recipe,cooking',
                'duration' => '09:12',
                'resolution' => '1080p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category_id' => 3,
                'title' => '5 Healthy Breakfast Ideas',
                'description' => 'Quick and nutritious breakfast recipes',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/FmGgFMo6a48/maxresdefault.jpg',
                'tags' => 'breakfast,healthy,recipes',
                'duration' => '11:30',
                'resolution' => '720p',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Fitness videos
            [
                'user_id' => 1,
                'category_id' => 4,
                'title' => '30-Minute Full Body Workout',
                'description' => 'No equipment needed home workout',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/SubaruOutbackOnStreetAndDirt.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/ml6cT4AZdqI/maxresdefault.jpg',
                'tags' => 'workout,fitness,home exercise',
                'duration' => '30:00',
                'resolution' => '1080p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'category_id' => 4,
                'title' => 'Yoga for Beginners',
                'description' => 'Basic yoga poses to improve flexibility',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/VaoV1PrYft4/maxresdefault.jpg',
                'tags' => 'yoga,beginner,flexibility',
                'duration' => '25:15',
                'resolution' => '720p',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Music videos
            [
                'user_id' => 3,
                'category_id' => 5,
                'title' => 'Piano Tutorial: Bohemian Rhapsody',
                'description' => 'Learn to play Queen\'s classic on piano',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/fJ9rUzIMcZQ/maxresdefault.jpg',
                'tags' => 'piano,tutorial,queen',
                'duration' => '22:40',
                'resolution' => '1080p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 5,
                'title' => 'Guitar Basics for Beginners',
                'description' => 'First 10 chords every guitarist should know',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WhatCarCanYouGetForAGrand.mp4',
                'status' => 'processed',
                'visibility' => 'public',
                'thumbnail' => 'https://i.ytimg.com/vi/0qCR0XJ7-ss/maxresdefault.jpg',
                'tags' => 'guitar,beginner,music',
                'duration' => '17:55',
                'resolution' => '720p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('videos')->insert($videos);
    }
}
