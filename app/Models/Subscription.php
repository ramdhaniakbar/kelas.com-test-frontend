<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subscription extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'normal_price',
        'selling_price',
        'created_at',
        'updated_at'
    ];

    public function subscription_privileges(): HasMany
    {
        return $this->hasMany(SubscriptionPrivilege::class);
    }
}
