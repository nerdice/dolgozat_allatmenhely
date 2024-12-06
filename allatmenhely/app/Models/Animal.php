<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Breed;
use app\Models\Shelter;
use app\Models\User;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'sex',
        'age',
        'caretaker_id',
        'shelter_id',
        'breed_id'
    ];
    
    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function shelter() {
        return $this->belongsTo(Shelter::class);
    }

    public function breed() {
        return $this->belongsTo(Breed::class);
    }
    
    
}
