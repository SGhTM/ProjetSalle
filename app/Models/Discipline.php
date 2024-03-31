<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'discipline',
        'description',
        'image',
        'coach_id',
        'tarif',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
