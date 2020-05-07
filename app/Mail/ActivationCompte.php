<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationCompte extends Mailable
{
    use Queueable, SerializesModels;

    private $id;
    private $name;
    private $link;

    /**
     * Create a new message instance.
     *
     * @param $id
     * @param $name
     * @param $link
     */
    public function __construct($id, $name, $link)
    {
        $this->id = $id;
        $this->name = $name;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('uajtc2015@gmai.com')
            ->view('Mail.MailActivationCompte', ['name'=>$this->name,'link'=>$this->link,'id'=>$this->id]);
    }
}
