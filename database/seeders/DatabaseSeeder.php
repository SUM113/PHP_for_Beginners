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
        post::factory(5)->create();


//        Post::truncate();
//
//        User::truncate();
//        Category::truncate();


//        //user table seeding
//         $user=User::factory(3)->create();
//
//
//
//        //Category table seeding
//
//        $work=Category::create([
//            'name'=> 'Work',
//            'slug'=>'work'
//        ]);
//
//         $family=Category::create([
//             'name' => 'Family',
//             'slug' => 'family',
//         ]);
//
//
//
//        $hobby=Category::create([
//             'name'=>'Hobby',
//             'slug'=>'hobby'
//         ]);
//
//
//        //Post table seeding
//
//         Post::create([
//             'Category_id'=>$work->first()->id,
//             'user_id'=>$user->first()->id,
//             'slug'=>'workpost',
//             'title'=>'Work Post',
//             'excerpt'=>'work posts exceprt',
//             'body'=>'this is my work posts',
//
//             ]);
//         Post::create([
//             'Category_id'=>$hobby->find(1)->id,
//             'user_id'=>$user->find(1)->id,
//             'slug'=>'hobbypost',
//             'title'=>'Hobby Post',
//             'excerpt'=>'hobby posts exceprt',
//             'body'=>'this is my hobby posts',
//
//             ]);
//         Post::create([
//             'Category_id'=>$family->find(2)->id,
//             'user_id'=>$user->find(2)->id,
//             'slug'=>'familypost',
//             'title'=>'Family Post',
//             'excerpt'=>'family posts exceprt',
//             'body'=>'this is my family posts',
//
//             ]);
    }
}
