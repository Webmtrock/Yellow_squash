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
        // 'article_body',
    ];
    
}