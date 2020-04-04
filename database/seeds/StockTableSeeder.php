<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();
        DB::table('stocks')->insert([
            'name' => 'マカロン',
            'detail' => '厳選した素材で作ったマカロンです。',
            'price' => 2000,
            'imgpath' => 'makaron.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'Bluetoothヘッドフォン',
            'detail' => 'ノイズキャンセリング機能搭載です。',
            'price' => 10000,
            'imgpath' => 'headphone.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '目覚まし時計',
            'detail' => '電波時計、オートスヌーズ機能搭載です。',
            'price' => 2000,
            'imgpath' => 'clock.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ドーナツ',
            'detail' => 'カロリーオフの美味しいドーナツです。',
            'price' => 120000,
            'imgpath' => 'donut.jpg',
        ]);
 
 
        DB::table('stocks')->insert([
            'name' => '高級腕時計',
            'detail' => 'メンズ用の高級腕時計です。',
            'price' => 198000,
            'imgpath' => 'watch.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式のカメラレンズです。',
            'price' => 79800,
            'imgpath' => 'lens.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'シャンパン',
            'detail' => '香りと味わいのバランスが良いシャンパンです。',
            'price' => 800,
            'imgpath' => 'shanpan.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ビール',
            'detail' => '飲みやすいビールです。',
            'price' => 200,
            'imgpath' => 'beer.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '食パン',
            'detail' => '素材にこだわった美味しい食パンです。',
            'price' => 500,
            'imgpath' => 'pan.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'スニーカー',
            'detail' => '軽くて履きやすいスニーカーです。',
            'price' => 3200,
            'imgpath' => 'sneaker.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'デスクトップパソコン',
            'detail' => '最新OS搭載のデスクトップパソコンです。',
            'price' => 11200,
            'imgpath' => 'pc.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'アコースティックギター',
            'detail' => '初心者向けのエントリーモデルです。',
            'price' => 25600,
            'imgpath' => 'aguiter.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです。',
            'price' => 15600,
            'imgpath' => 'eguiter.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '麦わら帽子',
            'detail' => '夏にぴったりな麦わら帽子です。',
            'price' => 3200,
            'imgpath' => 'hat.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'メガネ',
            'detail' => 'シンプルな黒縁メガネです。',
            'price' => 4200,
            'imgpath' => 'megane.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ロボット掃除機',
            'detail' => '自動で掃除してくれる便利な掃除機です。',
            'price' => 84200,
            'imgpath' => 'soujiki.jpg',
        ]);
    }
}
