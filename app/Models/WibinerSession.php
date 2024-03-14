<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WibinerSession extends Model
{
    use HasFactory;
    protected $table = 'wibiner_sessions';

    protected $fillable = [
        'wibiner_sessions',
        'wibiner_user_id',
        'heading',
        'defination'
    ];
}
