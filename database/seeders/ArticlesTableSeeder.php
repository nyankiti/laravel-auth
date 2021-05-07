<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('articles')->insert([
        //     'title' => 'a',
        //     'author' => 'b',
        //     'imageUrl' => 'c',
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        // ]);
        $params =
        [
            [
                'title' => 'Gift 王寺駅前自習室 I Open！',
                'author' => 'Junya',
                'imageUrl' => 'c',
                'html' => '<h1>aaaa</h1>'
            ],
            [
                'title' => 'a',
                'author' => 'b',
                'imageUrl' => 'c',
                'html' => '<h1>aaaa</h1>'
            ],
            [
                'title' => 'a',
                'author' => 'b',
                'imageUrl' => 'c',
                'html' => '<h1>aaaa</h1>'
            ]
        ];

        // はてなブログはdatestring型で日付を扱っているので、timestampではなく、datestringを使う
        // Carbonインスタンスはデフォルトでdatestring型を返す
        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('articles')->insert($param);
        }
    }
}
