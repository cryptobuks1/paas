<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\ContractBilling;

class ContractBillingSubmitted extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $billing;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContractBilling $billing, $subject, $message = '')
    {
        $this->billing = $billing;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->markdown('emails.contract_billing.submitted');
    }
}
