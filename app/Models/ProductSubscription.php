<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSubscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'proof',
        'booking_trx_id',
        'total_amount',
        'total_tax_amount',
        'customer_bank_name',
        'customer_bank_account',
        'customer_bank_number',
        'is_paid',
        'duration',
        'price',
        'product_id',
        'name',
        'phone',
        'sub_total',
        'total_ppn',
        'product_subscription_group_id',
        'product_subscription_group_name',
        'product_subscription_group_capacity',
        'product_subscription_group_participants',
        'product_subscription_group_messages',
        'product_subscription_group_created_at',
        'product_subscription_group_updated_at',
        'product_subscription_group_deleted_at',
        'product_subscription_group_is_active',
        'product_subscription_group_is_deleted',
        'product_subscription_group_is_archived',
        'product_subscription_group_is_completed',
        'participant_count',
        'product_subscription_id',
        'max_capacity',
        'max_account',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function group(): HasOne
    {
        return $this->hasOne(SubscriptionGroup::class, 'product_subscription_id');
    }
}
