<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'description_news', 'author'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
