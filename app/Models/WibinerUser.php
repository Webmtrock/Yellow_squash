<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WibinerUser extends Model
{
    use HasFactory;
    protected $table = 'wibiner_user_tables';

    protected $fillable = [
        'profile_image',
        'category_id',
        'description',
        'title',
        'expert_id',
        'webinar_video',
        'webinar_start_date',
        'day',
        'duration',
        'start_time',
        'end_time',
        'webinar_price ',
        'whatsapp_link'
    ];
    public function expert()
    {
        return $this->belongsTo(Expert::class);
    }
}

