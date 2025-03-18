<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $fillable =
    [
        'id',
        'doctor_id',
        'department_id',
        'days',
        'start_time',
        'end_time',
        'message',
        'status'
    ];
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
