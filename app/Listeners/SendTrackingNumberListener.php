<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendTrackingNumberListener
{
    public function handle(OrderShipped $event)
    {
        // Representation of a successful email sent with the tracking number retrieved from an external api.
    }
}
