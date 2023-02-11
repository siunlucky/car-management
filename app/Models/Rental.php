<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function office()
    {
        return $this->belongsTo(Office::class, 'destination');
    }

    public function userApplication()
    {
        return $this->belongsTo(User::class, 'application_user_id');
    }

    public function userApprovalSuperior()
    {
        return $this->belongsTo(User::class, 'approval_superior_id');
    }

    public function userApprovalHead()
    {
        return $this->belongsTo(User::class, 'approval_head_id');
    }

    public function userDecline()
    {
        return $this->belongsTo(User::class, 'decline_user_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
}
