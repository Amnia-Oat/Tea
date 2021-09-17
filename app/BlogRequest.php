<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogRequest extends Model
{
    public function rules()
    {
        return [
            'blog.title' => 'required|string|max:100',
            'blog.body' => 'required|string|max:400',
        ];
    }
}