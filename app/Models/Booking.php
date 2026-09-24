<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'name', 'email', 'company', 'budget', 'preferred_date', 'project_details', 'status',
    ];

    protected $casts = ['preferred_date' => 'date'];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}

