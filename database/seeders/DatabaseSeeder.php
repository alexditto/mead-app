<?php

namespace Database\Seeders;

use App\Models\Batch;
use App\Models\Equipment;
use App\Models\Recipe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Exception;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @throws Exception
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Alex Ditto",
            'email' => config('custom.admin_email'),
            'password' => config('custom.admin_password'),
            'role'=> "admin"
        ]);

        User::factory(10)->create()->each(function($user){
            Equipment::factory(random_int(1, 5))->create([
                'user_id'=>$user->id
            ]);
            Recipe::factory(random_int(1,3))->create([
                'creator_id'=> $user->id,
                'owner_id'=> $user->id,
            ])->each(function($recipe) use ($user){
                Batch::factory(random_int(1, 10))->create([
                    'user_id'=>$user->id,
                    'recipe_id'=>$recipe->id
                ]);
            });
        });
    }
}

