<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Animal;

class Shelter extends Model
{
    protected $fillable = [
        'name',
        'capacity'
    ];
    public function animal() {
        return $this->belongsToMany(Animal::class);
    }
}
