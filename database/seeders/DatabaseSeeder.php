<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(10)->create();

        $this->call([
            ArticleSeeder::class, // 修正箇所: ArticleSeeder クラスを呼び出す
        ]);
    }
}
