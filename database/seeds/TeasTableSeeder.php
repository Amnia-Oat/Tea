<?php

use Illuminate\Database\Seeder;

class TeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teas')->insert([
            'id' => '1',
            'name' => 'テ・オ・レ',
            'feature' => 'ミルクティーのために生まれたブレンド茶。ミルクをたっぷり入れて楽しみたい時に最適な、濃厚なコクとまろやかな甘みが魅力',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/teore.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '2',
            'name' => 'イングリッシュブレンド',
            'feature' => 'フルーティーなセイロンにアッサム紅茶をブレンド。少量のミルクを足しても美味しいまろやかな味わい。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/englishblend.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '3',
            'name' => 'ラタタン',
            'feature' => '焼き菓子のベストパートナー。バニラがほんのり香るなめらかで芳醇な紅茶。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/ratatam.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '4',
            'name' => 'アフタヌーンティー',
            'feature' => '香りとコクの黄金バランス。強いコクのアッサムをダージリンで軽やかにしたミルクティー向きの紅茶。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/afternoontea.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '5',
            'name' => 'グッドモーニング',
            'feature' => '体が目覚めるキレの良い風味。アフリカ産の紅茶にアッサム紅茶をブレンド。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/goodmorning.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '6',
            'name' => 'ティーブレイク',
            'feature' => '渋みの少ないニルギリ紅茶をベースに。優しい風味で後味すっきり。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/teabreak.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '7',
            'name' => 'ユニオンジャック',
            'feature' => 'イギリスで親しまれる紅茶の味を再現。上品でオーソドックスな風味。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/unionjack.jpeg',
        ]);
        DB::table('teas')->insert([
            'id' => '8',
            'name' => 'ベルエポック',
            'feature' => 'ダージリンにコクのある紅茶を組み合わせた「王道」の紅茶。正統派で上品な味わい。',
            'image_path' => 'https://teapicture.s3.ap-northeast-1.amazonaws.com/tea/bellepoque.jpeg',
        ]);
    }
}
