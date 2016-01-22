<?php

namespace App\Listeners;

use App\Events\PodcastWasPurchased;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailPurchaseConfirmation implements ShouldQueue
{
    protected $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct( Mailer $mailer )
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  PodcastWasPurchased $event
     *
     * @return void
     */
    public function handle( PodcastWasPurchased $event )
    {
        //
    }
}
