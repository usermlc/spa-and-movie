<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MovieResultMail extends Mailable
{
    public $movieDetails;

    public function __construct($movieDetails)
    {
        $this->movieDetails = $movieDetails;
    }

    public function build()
    {
        return $this->subject('Movie Details')
            ->view('emails.movie_result');
    }
}
