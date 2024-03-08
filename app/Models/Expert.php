<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = [
        'expert_category_id',
        'name',
        'expert_designation',
        'expert_experience',
        'expert_qualification',
        'expert_language',
        'expert_description',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'expert_category_id');
    }
 

    
    
}