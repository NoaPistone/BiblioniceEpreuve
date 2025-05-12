<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs'; // nom de ta table
    protected $primaryKey = 'id_utilisateur'; // nom de ta clé primaire
    public $timestamps = false; // si tu n'as pas les colonnes created_at et updated_at
}
