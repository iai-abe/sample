<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // テーブル内のデータを一旦全削除
        DB::table('articles')->truncate(); // 'articles' テーブルを削除

        // データのインサート
        DB::table('articles')->insert([
            [
                'user_id' => 2,
                'title' => 'title1',
                'body' => 'body1',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ],
            [
                'user_id' => 2,
                'title' => 'title2',
                'body' => 'body2',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ],
            [
                'user_id' => 2,
                'title' => 'title3',
                'body' => 'body3',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ]
        ]);
    }
}
