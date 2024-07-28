<?php

namespace App\Listeners;

use App\Events\UserRegister;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class SendWelcome implements ShouldQueue
{
    use InteractsWithQueue;
    public $user;
   
    /**
     * Create the event listener.
     */
    public function __construct(User $user)
    {
    $user->user =$user;
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegister $event): void
    {
        $user =$event->user;
        Mail::to($user->email)->send(new WelcomeEmail($user));
    }
}
