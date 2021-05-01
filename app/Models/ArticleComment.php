<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{

    protected $fillable=[
        'message',
        'created_at',
        'author',
        'updated_at',
        'approved',
        'article_id'
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    protected $table = 'comments';
    use HasFactory;
}
