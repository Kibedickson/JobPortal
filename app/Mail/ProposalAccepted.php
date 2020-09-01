<?php

namespace App\Mail;

use App\Job;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProposalAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $job;

    /**
     * Create a new message instance.
     *
     *
     */
    public function __construct($user, $job)
    {
        $this->$user = $user;
        $this->$job = $job;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.proposalAccepted');
    }
}
