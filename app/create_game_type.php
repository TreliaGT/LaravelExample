<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_game_type extends Model
{
    public function games(){
        return $this->hasMany(Games::class);
    }
}
