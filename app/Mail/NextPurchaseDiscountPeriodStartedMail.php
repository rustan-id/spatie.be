<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NextPurchaseDiscountPeriodStartedMail extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this
            ->to($this->user->email)
            ->markdown('mails.nextPurchaseDiscountPeriodStarted');
    }
}
