<?php

namespace App\Listeners;

use App\Events\SentMail;
use App\Mail\TestMail;
use App\Models\User;
use App\Notifications\TestNotfication;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SentMailFired implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(SentMail $event): void
    {

        // $event->user->notify(new TestNotfication());

        Mail::to($event->user->email)->send(
            (new TestMail())->afterCommit()
        );
    }
}
