<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
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

        /*seedデータが重複してもエラーを起こさないようにする
        User::truncate();
        Category::truncate();
        */

        User::create([
            'username' => '管理者ABC',
            'email' => 'abc@example.com',
            'password' => bcrypt('test1234'),
        ]);

        User::create([
            'username' => '管理者DEF',
            'email' => 'def@example.com',
            'password' => bcrypt('test5678'),
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
    }
}
