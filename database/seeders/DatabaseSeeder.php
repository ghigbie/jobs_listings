<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use App\Models\Job;
use App\Models\Employer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\JobTagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employer::factory(15)->create();
        $jobs = Job::factory(250)->create();
        User::factory(200)->create();
        $tags = Tag::factory(50)->create();

        $jobs->each(function ($job) use ($tags) {
            $randomTagIds = $tags->random(rand(1, 5))->pluck('id')->toArray();
            $job->tags()->attach($randomTagIds);
        });
    }
}
