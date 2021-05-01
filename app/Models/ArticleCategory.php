<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    const UPDATED_AT = 'updated_up';

    protected $fillable=[
        'name',
        'create_at',
        'updated_up',
        'parent_category',
        'slug',
        'SEO_title',
        'SEO_description'
    ];
/// self join ????? posibil gresit sau posibil drept (eu cred ca e drept dar nu 100%)
    public function categories(){
        return $this->hasMany(self::class, 'id');
    }
    public function parent_category(){
        return$this->belongsTo(self::class,'parent_category');
    }
    //////////////

    public function articles(){
        return $this->hasMany(Article::class);
    }


    protected $table = 'categories';
    use HasFactory;
}
