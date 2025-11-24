<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;
use App\Models\User;


class CustomResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $link;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, $link)
    {
        $this->user = $user;
        $this->link = $link;
    }

    public function build()
    {
        return $this->subject(__('Reset password notification'))
                    ->view('auth.emails.custom_reset-password') 
                    ->with([
                        'user' => $this->user,
                        'link' => $this->link,
                    ]);
    }
    
}
