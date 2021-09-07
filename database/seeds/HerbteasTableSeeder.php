<?php

use Illuminate\Database\Seeder;

class HerbteasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herbteas')->insert([
            'id' => '1',
            'mood_id' => '1',
            'name' => 'ローズマリー',
            'feature' => '刺激的な香りと飲み口がさっぱり。集中力UPが期待でき、目覚めの一杯にも最適。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '2',
            'mood_id' => '1',
            'name' => 'ペパーミントティー',
            'feature' => 'ハーブティーの中でも爽やかな味わい。香りが強いため、目覚めの一杯におすすめ。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '3',
            'mood_id' => '2',
            'name' => 'サクラ',
            'feature' => '桜の葉をたっぷり使ったハーブティー。和菓子にも洋菓子にも合うため、ティータイムにおすすめ。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '4',
            'mood_id' => '2',
            'name' => 'ラベンダー',
            'feature' => '上品な香りで癒し効果が期待でき、リフレッシュ効果も。タンニンが含まれているため貧血に注意。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '5',
            'mood_id' => '3',
            'name' => 'ジンジャー',
            'feature' => '新陳代謝の促進や胃腸の働きを助ける効果が。冷えをとり、体を温めてくれる効果があるためリラックス効果も。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '6',
            'mood_id' => '3',
            'name' => 'カモミール',
            'feature' => 'ハーブティーの代表格。優しい甘さ、すっきりとした香りでリラックスタイムにおすすめ。キク科の植物のためアレルギー持ちの方は注意。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '7',
            'mood_id' => '4',
            'name' => 'ローズヒップ',
            'feature' => '「ビタミンの爆弾」と言われるほど栄養が豊富。ノンカフェインで体に優しく飲みやすい。',
        ]);
        DB::table('herbteas')->insert([
            'id' => '8',
            'mood_id' => '4',
            'name' => 'ルイボス',
            'feature' => 'すっきりとした甘さで飲みやすく、健康維持にも効果的。ノンカフェインのため寝る前でも安心。',
        ]);
    }
}
