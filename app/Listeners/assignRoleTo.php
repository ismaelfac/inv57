<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use App\Events\UserRegistred;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class assignRoleTo
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
        $event->user->roles()->sync(['4']);
        Log::info('role', ['user' => $event->user]);
    }
}
