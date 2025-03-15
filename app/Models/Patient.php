<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'age',
        'gender',
        'address',
        'country',
        'state',
        'phone',
        'status'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
