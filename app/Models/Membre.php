<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','date_naiss','taille','poids','sexe','num_tel','email','photo','adresse'];
}
 