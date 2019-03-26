<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameTypes extends Model
{
    public function Games(){
        return $this->hasMany(games::class);
    }
}
