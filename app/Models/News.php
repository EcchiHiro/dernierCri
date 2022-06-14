<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string|null $news_type
 * @property string|null $thumbnail_image
 * @property string|null $main_image
 * @property string|null $title
 * @property string|null $description
 * @property string|null $external_url
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $url
 * @method static Builder|News newModelQuery()
 * @method static Builder|News newQuery()
 * @method static Builder|News query()
 * @method static Builder|News whereCreatedAt($value)
 * @method static Builder|News whereDescription($value)
 * @method static Builder|News whereExternalUrl($value)
 * @method static Builder|News whereId($value)
 * @method static Builder|News whereMainImage($value)
 * @method static Builder|News whereNewsType($value)
 * @method static Builder|News whereThumbnailImage($value)
 * @method static Builder|News whereTitle($value)
 * @method static Builder|News whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
