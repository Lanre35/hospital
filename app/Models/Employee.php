<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'role_id',
        'status'
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
