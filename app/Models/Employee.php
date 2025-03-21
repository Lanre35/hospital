<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'employee_id',
        'date',
        'phone',
        'role',
        'status'
    ];
}
