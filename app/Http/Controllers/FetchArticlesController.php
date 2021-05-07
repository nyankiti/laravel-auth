<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;


class FetchArticlesController extends Controller
{
    public function index()
    {
        // はてなブログはdatestring型を扱っているので、datastring型を返すCarbonインスタンスを現在時刻に使う
        $now = Carbon::now();


        // $articles = Article::get();
        // dd($articles);

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://blog.hatena.ne.jp/seiproject/seiproject.hateblo.jp/atom/entry', [
            'auth' => ['seiproject', 'tbevqkdqnc']
        ]);
        $xml = simplexml_load_string($res->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);

        // json
        $json = json_encode($xml);

        // array
        $array = json_decode($json, true);

        // dd($array);


        // 保存する形式へdateの整形する
        $data = [];
        foreach ($array as $key => $value){
            // 実行処理文
            // $data['title'] =>
        }

        // datestringは変形する必要なし







        // データベースへの保存

        // 一つだけ保存する時
        // Article::create([
        //     'title' => '12/13 laravel勉強会', 'author' => '', 'imageUrl' => '', 'html' => '', 'published_at' => '',
        // ]);


        // 複数レコードを保存する時
        $data = [
            ['title' => '12/13 laravel勉強会', 'author' => '', 'imageUrl' => '', 'html' => '', 'created_at' => '', 'updated_at' => ''],
        ];

        Article::insert($data); // Eloquentでの方法
    }
}
