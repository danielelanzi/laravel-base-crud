<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable = [
        'categoria',
        'colore',
        'tipologia',
        'regione',
        'nome',
        'prezzo',
        'voto',
        'annata',
        'created_at'
    ];
}
