<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_game_table extends Model
{
    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }
}
