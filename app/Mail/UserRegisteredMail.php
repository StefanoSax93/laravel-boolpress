<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    
    public function __construct($_user)
    {
        $this->user = $_user;
    }

    public function build()
    {
        return $this->markdown('mails.user-registered', [
            "user" => $this->user
        ])->subject("Benvenuto " . $this->user->name);
    }
}
