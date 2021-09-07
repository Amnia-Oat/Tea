<?php

use Illuminate\Database\Seeder;

class HerbqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herbqs')->insert([
            'id' => '1',
            'question' => '朝は寝起きが良い方だ',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '2',
            'question' => '仕事はリモートワークが中心だ',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '3',
            'question' => '最近は運動不足気味だ',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '4',
            'question' => '朝食はパン派だ',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '5',
            'question' => '夜更かしが好き',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '6',
            'question' => '異性の友達が多い',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '7',
            'question' => 'どちらかというとおしゃべりな方だ',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '8',
            'question' => '自分は癒し系だと思う',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
        DB::table('herbqs')->insert([
            'id' => '9',
            'question' => '暖色系の色が好きだ',
            'choice_1' => 'yes',
            'choice_2' => 'no',
        ]);
    }
}
