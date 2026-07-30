<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlacedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $customer;

    public function __construct($order, $customer)
    {
        $this->order = $order;
        $this->customer = $customer;
    }

    public function build()
    {
        return $this->subject('Order Confirmation - ' . $this->order->oeder_id)
            ->view('emails.order_placed')
            ->with([
                'order' => $this->order,
                'customer' => $this->customer,
            ]);
    }
}
