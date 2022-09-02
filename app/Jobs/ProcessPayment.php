<?php

namespace App\Jobs;

use App\Events\OrderShipped;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessPayment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public Order $order)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Representation of a successful call to a third party (stripe) to debit user card. Can be mocked :wink:
        $success = true;
        if (! $success) {
            Log::critical('something went wrong');
            throw new \Exception();
        }

        $this->order->update(['paid_at' => now()]);
        OrderShipped::dispatch($this->order);
    }
}
