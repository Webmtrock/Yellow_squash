<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'program_id',
    ];

    public function program()
    {
        return $this->belongsTo(Programins::class);
    }


}


