<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendInvoiceListener
{
    public function handle(OrderCreated $event)
    {
        // Representation of a successful invoice generated and sent to the user
    }
}
