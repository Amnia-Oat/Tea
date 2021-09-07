<?php

use Illuminate\Database\Seeder;

class TeaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teaqs')->insert([
            'id' => '1',
            'question' => '紅茶の好みは?',
            'choice_1' => 'はっきりしている',
            'choice_2' => 'はっきりしていない',
        ]);
        DB::table('teaqs')->insert([
            'id' => '2',
            'question' => 'あなたの紅茶の飲み方は?',
            'choice_1' => 'ミルクティーがメイン',
            'choice_2' => 'ストレートがメイン',
        ]);
        DB::table('teaqs')->insert([
            'id' => '3',
            'question' => 'あなたはどっち派?',
            'choice_1' => '気分によって飲み分けたい',
            'choice_2' => '場面を気にしないで紅茶を飲みたい',
        ]);
        DB::table('teaqs')->insert([
            'id' => '4',
            'question' => 'お好みのミルクの量は?',
            'choice_1' => 'たっぷり',
            'choice_2' => 'ちょっぴり',
        ]);
        DB::table('teaqs')->insert([
            'id' => '5',
            'question' => '紅茶に合わせたいお菓子は?',
            'choice_1' => '焼き菓子',
            'choice_2' => '生ケーキ',
        ]);
        DB::table('teaqs')->insert([
            'id' => '6',
            'question' => 'どんな時に紅茶を飲みたい?',
            'choice_1' => '朝の目覚めに',
            'choice_2' => '気分転換',
        ]);
        DB::table('teaqs')->insert([
            'id' => '7',
            'question' => 'どちらかというと好きなのは?',
            'choice_1' => 'ロンドン',
            'choice_2' => 'パリ',
        ]);
    }
}
