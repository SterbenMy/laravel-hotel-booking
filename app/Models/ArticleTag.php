<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
const UPDATED_AT = 'updated_up';
    protected $fillable=[
        'name',
        'created_at',
        'updated_up',
        'slug'
];

    public function articles_tags_connections(){
        return $this->hasMany(ArticleTagConnection::class);
    }
    protected $table = 'tags';
    use HasFactory;
}
