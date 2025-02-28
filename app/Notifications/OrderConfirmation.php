<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmation extends Notification
{
    use Queueable;

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $message = (new MailMessage)
            ->subject('Order Confirmation - #' . $this->order->order_number)
            ->greeting('Hello ' . $this->order->first_name . '!')
            ->line('Thank you for your order. We have received your order and will contact you soon.')
            ->line('Order Details:')
            ->line('Order Number: #' . $this->order->order_number)
            ->line('Total Amount: $' . number_format($this->order->total_amount, 2));

        // Add order items
        foreach ($this->order->items as $item) {
            $message->line($item->product->name . ' (x' . $item->quantity . ') - $' . number_format($item->price, 2));
        }

        $message->line('Shipping Address:')
            ->line($this->order->first_name . ' ' . $this->order->last_name)
            ->line($this->order->address)
            ->line($this->order->city . ', ' . $this->order->state . ' ' . $this->order->zip_code)
            ->line($this->order->country)
            ->line('If you have any questions about your order, please don\'t hesitate to contact us.');

        return $message;
    }
}
