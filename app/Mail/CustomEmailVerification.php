<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomEmailVerification extends Mailable
{
    use SerializesModels;

    public $user;
    public $verificationUrl;

    /**
     * Crear una nueva instancia de mensaje.
     *
     * @param  $user
     * @param  $verificationUrl
     * @return void
     */
    public function __construct($user, $verificationUrl)
    {
        $this->user = $user;
        $this->verificationUrl = $verificationUrl;
    }

    /**
     * Construir el mensaje del correo.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('auth.emails.custom_verification') // Plantilla personalizada
                    ->with([
                        'name' => $this->user->name,
                        'verificationUrl' => $this->verificationUrl, // Pasar la URL firmada
                    ])
                    ->subject('Verify Your Email');
    }
}
