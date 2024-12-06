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
    public function breed() {
        return $this->belongsTo(Breed::class);
    }
    public function shelter() {
        return $this->hasOne(Shelter::class);
    }
    public function caretaker() {
        return $this->hasMany(User::class);
    }
}
