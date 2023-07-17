<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $videos = [
            [
                'title' => 'Introduction to Laravel',
                'slug' => 'introduction-to-laravel',
                'description' => 'This video introduces the Laravel framework.',
                'url' => 'https://www.youtube.com/watch?v=1234567890',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567890/thumbnail',
                'institute_id' => 1,
            ],
            [
                'title' => 'Building a CRUD App with Laravel',
                'slug' => 'building-a-crud-app-with-laravel',
                'description' => 'This video shows you how to build a CRUD app with Laravel.',
                'url' => 'https://www.youtube.com/watch?v=9876543210',
                'thumbnail' => 'https://www.youtube.com/watch?v=9876543210/thumbnail',
                'institute_id' => 4,
            ],
            [
                'title' => 'Deploying a Laravel App to Production',
                'slug' => 'deploying-a-laravel-app-to-production',
                'description' => 'This video shows you how to deploy a Laravel app to production.',
                'url' => 'https://www.youtube.com/watch?v=4321098765',
                'thumbnail' => 'https://www.youtube.com/watch?v=4321098765/thumbnail',
                'institute_id' => 3,
            ],
            [
                'title' => 'Laravel Eloquent Tutorial',
                'slug' => 'laravel-eloquent-tutorial',
                'description' => 'This video is a tutorial on how to use Eloquent in Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567895',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567895/thumbnail',
                'institute_id' => 1,
            ],
            [
                'title' => 'Laravel Queues Tutorial',
                'slug' => 'laravel-queues-tutorial',
                'description' => 'This video is a tutorial on how to use queues in Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567896',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567896/thumbnail',
                'institute_id' => 2,
            ],
            [
                'title' => 'Laravel Pagination Tutorial',
                'slug' => 'laravel-pagination-tutorial',
                'description' => 'This video is a tutorial on how to use pagination in Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567897',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567897/thumbnail',
                'institute_id' => 3,
            ],
            [
                'title' => 'Laravel Blade Templates Tutorial',
                'slug' => 'laravel-blade-templates-tutorial',
                'description' => 'This video is a tutorial on how to use Blade templates in Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567898',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567898/thumbnail',
                'institute_id' => 4,
            ],
            [
                'title' => 'Laravel Forms Tutorial',
                'slug' => 'laravel-forms-tutorial',
                'description' => 'This video is a tutorial on how to create forms in Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567899',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567899/thumbnail',
                'institute_id' => 2,
            ],
            [
                'title' => 'Laravel Authentication Tutorial',
                'slug' => 'laravel-authentication-tutorial',
                'description' => 'This video is a tutorial on how to implement authentication in Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567900',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567900/thumbnail',
                'institute_id' => 4,
            ],
            [
                'title' => 'Laravel Advanced Tutorial',
                'slug' => 'laravel-advanced-tutorial',
                'description' => 'This video is an advanced tutorial on Laravel.',
                'url' => 'https://www.youtube.com/watch?v=1234567892',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567892/thumbnail',
                'institute_id' => 2,
            ],
            [
                'title' => 'Laravel Security Tips',
                'slug' => 'laravel-security-tips',
                'description' => 'This video provides some tips on how to secure your Laravel app.',
                'url' => 'https://www.youtube.com/watch?v=1234567893',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567893/thumbnail',
                'institute_id' => 3,
            ],
            [
                'title' => 'Laravel Testing Tutorial',
                'slug' => 'laravel-testing-tutorial',
                'description' => 'This video is a tutorial on how to test your Laravel app.',
                'url' => 'https://www.youtube.com/watch?v=1234567894',
                'thumbnail' => 'https://www.youtube.com/watch?v=1234567894/thumbnail',
                'institute_id' => 3,
            ]

        ];

        Video::insert($videos);
    }
}
