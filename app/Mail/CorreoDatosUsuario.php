<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use app\models\User;

class CorreoDatosUsuario extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $User)
    {
        $this->User = $User;
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.mail.CorreoDatosUsuario');
        $User = User::pluck('rodriguezisrael1406@gmail.com');
        Mail::to($User)->send(new CorreoDatosUsuario($call));
    }
}
