<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
        'news_type',
        'thumbnail_image',
        'main_image',
        'title',
        'description',
        'external_url',
    ];

    public function getUrlAttribute()
    {
        return route('news.show', ['id' => $this->id, 'slug' => Str::slug( $this->title, '-')]);
    }
}
