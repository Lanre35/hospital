<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    protected $table = 'doctors';

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'gender',
        'dateofbirth',
        'state',
        'phone',
        'biography',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function appontments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function scheldules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

}
