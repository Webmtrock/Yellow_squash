<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = [
        'select_expert_category',
        'name',
        'expert_designation',
        'expert_experience',
        'expert_qualification',
        'expert_language',
        'expert_description',
    ];
    

    
}