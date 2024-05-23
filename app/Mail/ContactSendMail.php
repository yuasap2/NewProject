<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

   private $name;
   private $cname;
   private $tel;
   private $email;
   private $massage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs,$type)
    {
       $this->name = $inputs['name'];
       $this->cname = $inputs['cname'];
       $this->tel = $inputs['tel'];
       $this->email = $inputs['email'];
       $this->content = $inputs['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('お問い合わせありがとうございます')
        ->view('emails.urer')
        ->with([
            'name' => $this->name,
            'cname' => $this->cname,
            'tel' => $this->tel,
            'email' => $this->email,
            'content' => $this->contet ? $this->content : null
        ]);
    }
}
