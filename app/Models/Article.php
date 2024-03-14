<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article_title',
        'summary',
        'category_id',
        'name',
        'article_slug',
        'meta_tag',
        'meta_description',
        'banner_image',
        'expert_id',
        'article_body',
        'is_draft',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function experts()
    {
        return $this->belongsTo(Expert::class ,'expert_id' );
    }
}