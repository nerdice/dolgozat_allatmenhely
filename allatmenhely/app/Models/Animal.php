<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Breed;
use app\Models\Shelter;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'sex',
        'age'
    ];
    public function breed() {
        return $this->belongsTo(Breed::class);
    }
    public function shelter() {
        return $this->hasOne(Shelter::class);
    }
}
