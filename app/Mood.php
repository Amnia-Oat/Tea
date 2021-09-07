<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    // 1対1のときは単数形 - 1対多のときは複数形
    public function herbteas()
    {
        // Herbteaモデルのデータを引っ張ってくる
        // hasMany -> mood.id==herbtea.mood_id
        return $this->hasMany('App\Herbtea');
    }
}
