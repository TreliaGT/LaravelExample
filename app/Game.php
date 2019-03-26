<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }
    public function gameType(){
        return $this->hasOne(GameType::class);
    } //
}
