<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function currentDelayReport(): BelongsTo
    {
        return $this->belongsTo(DelayReport::class, 'current_delay_report_id');
    }
}
