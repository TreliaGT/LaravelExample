<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Manufacturer extends Model
{
    // a manufacturer has (zero or more) games
    public function games() {
        return $this->hasMany(create_game_table::class);
    }
}