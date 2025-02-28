<?php

namespace App\Observers;

use App\Models\ProductSubscription;
use Illuminate\Support\Str;

class ProductSubscriptionObserver
{


    public function creating (ProductSubscription $subscription): void
    {
        $subscription->booking_trx_id = $subscription->booking_trx_id ?? $this->generateUniqueTrxId();
    }

    private function generateUniqueTrxId(): string
    {
        $prefix = 'KECEMU';
        do {
            $randomstring = $prefix . mt_rand(1000, 9999);
        } while (ProductSubscription::where('booking_trx_id', $randomstring)->exists());
        }
    }


    /**
     * Handle the ProductSubscription "created" event.
     */
    public function created(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "updated" event.
     */
    public function updated(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "deleted" event.
     */
    public function deleted(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "restored" event.
     */
    public function restored(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "force deleted" event.
     */
    public function forceDeleted(ProductSubscription $productSubscription): void
    {
        //
    }
}
