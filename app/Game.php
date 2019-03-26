<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }
    public function GameTypes(){
        return $this->hasOne(gameTypes::class);
    } //
}
