<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    protected $table = 'appointments';

    // protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'appointment_id',
        'patient_id',
        'doctor_id',
        'department_id',
        'age',
        'time',
        'date',
        'email',
        'phone',
        'message',
        'status',
    ];

  public function patient(): BelongsTo
  {
    return $this->belongsTo(Patient::class);
  }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
