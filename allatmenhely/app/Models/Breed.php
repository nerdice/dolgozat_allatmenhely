<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Animal;
use app\Models\Species;

class Breed extends Model
{
    protected $fillable = [
        'name',
        'species_id'
    ];
    
    public function animal() {
        $this->hasMany(Animal::class);
    }

    public function species() {
        return $this->belongsTo(Species::class);
    }
}
