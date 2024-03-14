<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'add_plans',
        'programins_id',
    ];

    public function program()
    {
        return $this->belongsTo(Programins::class, 'programins_id'); // Specify the correct foreign key column
    }


}


