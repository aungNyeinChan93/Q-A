<?php

namespace Database\Seeders;

use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Question;
use App\Models\Question_Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            "password"=>Hash::make("password"),
        ]);

        Tag::create([
            "slug" => Str::slug("what is Java!"),
            "name" => "Java",
        ]);

        Tag::create([
            "slug" => Str::slug("what is C+ ?"),
            "name" => "C+",
        ]);

        Tag::create([
            "slug" => Str::slug("what is Laravel ?"),
            "name" => "Laravel",
        ]);

        Question::create([
            "user_id" => 1,
            "slug" => Str::slug("what is web-dev!"),
            "title" => "Web-Development",
            "description" => "Generate Lorem Ipsum placeholder text
             for use in your graphic, print and web layouts, and discover plugins
             for your favorite writing, design and blogging tools. Explore the origins,
             history and meaning of the famous passage, and",
        ]);

        Question_Tag::created([
            "question_id" => 1,
            "tag_id" => 1
        ]);
        Question_Tag::created([
            "question_id" => 1,
            "tag_id" => 2
        ]);
    }
}
