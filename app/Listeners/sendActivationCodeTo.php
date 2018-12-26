<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use App\Events\UserRegistred;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\MailController;

class sendActivationCodeTo implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistred  $event
     * @return void
     */
    public function handle(UserRegistred $event)
    {
        MailController::sendVerification($event->user);
    }
}
