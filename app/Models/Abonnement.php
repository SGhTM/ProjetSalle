<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'discipline_id',
        'membre_id',
        'prix_total',
        'valide',
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }
}
