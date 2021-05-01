<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'modified_at';

    protected $fillable = [
        'title',
        'short_description',
        'content',
        'create_at',
        'modified_at',
        'published_at',
        'SEO_title',
        'SEO_description',
        'slug',
        'author_id',
        'image_id',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function images()
    {
        return $this->hasOne(ArticleImage::class);
    }

    public function tagsConnections(){
        return $this->hasMany(ArticleTagConnection::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    protected $table = 'articles';
    use HasFactory;
}
