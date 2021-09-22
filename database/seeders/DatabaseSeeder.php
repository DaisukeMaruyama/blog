<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        //seedデータが重複してもエラーを起こさないようにする
        User::truncate();
        Category::truncate();
        Post::truncate();

        Post::factory(5)->create();
        //$user = User::factory()->create();

        //$user = User::create([
        //    'username' => '管理者ABC',
        //    'email' => 'abc@example.com',
        //    'password' => bcrypt('test1234'),
        //]);
//
        //$user2 = User::create([
        //    'username' => '管理者DEF',
        //    'email' => 'def@example.com',
        //    'password' => bcrypt('test5678'),
        //]);

        //$personal = Category::create([
        //    'name' => 'Personal',
        //    'slug' => 'personal',
        //]);
//
        //$family = Category::create([
        //    'name' => 'Family',
        //    'slug' => 'family',
        //]);
//
        //$work = Category::create([
        //    'name' => 'Work',
        //    'slug' => 'work',
        //]);
//
        //Post::create([
        //    'user_id' => $user->id,
        //    'category_id' => $personal->id,
        //    'title' => "My personal Post",
        //    'slug' => 'personal',
        //    'excerpt' => 'Lorem ipsum dolar sit amet.',
        //    'body' => "We like to call Laravel a progressive framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.",
        //]);
//
        //Post::create([
        //    'user_id' => $user->id,
        //    'category_id' => $family->id,
        //    'title' => "My family Post",
        //    'slug' => 'family',
        //    'excerpt' => 'Lorem ipsum dolar sit amet.',
        //    'body' => "We like to call Laravel a progressive framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.",
        //]);
//
        //Post::create([
        //    'user_id' => $user->id,
        //    'category_id' => $work->id,
        //    'title' => "My work Post",
        //    'slug' => 'work',
        //    'excerpt' => 'Lorem ipsum dolar sit amet.',
        //    'body' => "We like to call Laravel a progressive framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.",
        //]);
    }
}
