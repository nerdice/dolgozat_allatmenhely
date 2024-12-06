<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Breed;

class Species extends Model
{
    protected $fillable = [
        'name'
    ];

    public function breed() {
        return $this->hasMany(Breed::class);
    }
}
