<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    const UPDATED_AT = 'updated_up';
    protected $fillable=[
        'name',
        'created_at',
        'updated_up',
        'size',
        'path'
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    protected $table = 'images';
    use HasFactory;
}
