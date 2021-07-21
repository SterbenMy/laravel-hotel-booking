<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'country',
        'rating',
        'email',
        'address',
        'description',
        'price',
        'image_id'
    ];

    public function images()
    {
        return $this->hasOne(ArticleImage::class);
    }

    protected $table = 'hotel';
    use HasFactory;
}
