<?php

namespace App\Observers;

use App\Models\Donate;

class DonateObserver
{
    /**
     * Handle the Donate "created" event.
     */
    public function created(Donate $donate): void
    {
        //
    }

    /**
     * Handle the Donate "updated" event.
     */
    public function updated(Donate $donate): void
    {
        if ($donate->current_price >= $donate->goal_price) {
            $donate->status = 'success';
        } else {
            $donate->status = 'pending';
        }
    }

    /**
     * Handle the Donate "deleted" event.
     */
    public function deleted(Donate $donate): void
    {
        //
    }

    /**
     * Handle the Donate "restored" event.
     */
    public function restored(Donate $donate): void
    {
        //
    }

    /**
     * Handle the Donate "force deleted" event.
     */
    public function forceDeleted(Donate $donate): void
    {
        //
    }
}
