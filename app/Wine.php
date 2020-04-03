<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillabale = 
    [
        'categoria',
        'colore',
        'tipologia',
        'regione',
        'nome',
        'prezzo',
        'voto',
        'annata'
    ];
}
