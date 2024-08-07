<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubscriptionPrivilege extends Model
{
    use HasFactory;

    protected $table = 'subscription_privileges';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'subscription_id',
        'name',
        'created_at',
        'updated_at'
    ];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }
}
