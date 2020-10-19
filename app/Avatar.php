<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model {
    public $timestamps = false;

    // protected $fillable = [
    //     'phone', 'avatar', 'user_id'
    // ];

    // In alternativa al codice qui sopra, sempre in un'ottica di 'mass assignment protection', si possono rendere 'fillable' tutti i campi che andrò a immettere dando un array vuoto ai campi 'guarded':
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
