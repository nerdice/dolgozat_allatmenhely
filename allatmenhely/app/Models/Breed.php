<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Animal;

class Breed extends Model
{
    protected $fillable = [
        'name',
        'species_id'
    ];
    
    
}
