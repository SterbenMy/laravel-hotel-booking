<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ArticleTagConnection extends Model
{
    protected $fillable=[
        'article_id',
        'tag_id'
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    public function tags(){
        return $this->belongsTo(ArticleTag::class);
    }

    protected $table='tagsConnections';
    use HasFactory;
}
