<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
