<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'master_id',
        'annee_bac',
        'nature_licence',
        'etablissement',
        'annee_licence',
        'specialite',

        'moyenne_annee_1',
        'session_annee_1',
        'moyenne_annee_2',
        'session_annee_2',
        'moyenne_annee_3',
        'session_annee_3',

        'note_pfe',
        'redoublement',
        'annees_blanches',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function master()
    {
        return $this->belongsTo(Master::class);
    }
}
