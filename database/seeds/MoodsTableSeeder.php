<?php

use Illuminate\Database\Seeder;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moods')->insert([
            'id' => '1',
            'mood' => '「快晴」の気分',
            'feature' => '雲ひとつない真っ青な空のように晴れやかな気分！1日の始まりに刺激的な一杯を！',
        ]);
        DB::table('moods')->insert([
            'id' => '2',
            'mood' => '「晴れ」の気分',
            'feature' => 'ぽかぽかの陽だまりのように、ゆったり穏やかな気分！1日の始まりにリラックス&リフレッシュできる一杯を！',
        ]);
        DB::table('moods')->insert([
            'id' => '3',
            'mood' => '「木漏れ日」の気分',
            'feature' => '木の葉の間から漏れて差し込む日光のようにほんわかな気分！のんびりと癒しに満ちた1日にリラックスできる一杯を！',
        ]);
        DB::table('moods')->insert([
            'id' => '4',
            'mood' => '「そよ風」の気分',
            'feature' => '全身を心地よく吹き抜けるそよ風気分！マイペースに充実した1日にすっきりと飲みやすい一杯を！',
        ]);
    }
}
