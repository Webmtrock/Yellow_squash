<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programins extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'rating',
        'expert_id',
        'programming_tovideo_url',
        'image_url',
        'program_for',
        'whatsapp_group_url',
        'intake_from_link',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function expert()
    {
        return $this->belongsTo(Expert::class);
    }
}
