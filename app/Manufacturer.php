<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    // a manufacturer has (zero or more) games
    public function Games() {
        return $this->hasMany(games::class);
    }
}