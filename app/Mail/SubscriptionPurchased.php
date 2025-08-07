<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User; // Importe o modelo User

class SubscriptionPurchased extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subscription;

    public function __construct(User $user, $subscription)
    {
        $this->user = $user;
        $this->subscription = $subscription; // A instância da assinatura do Cashier
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sua Assinatura Foi Confirmada!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscriptions.purchased',
            with: [
                'userName' => $this->user->name,
                'planName' => $this->subscription->stripe_price, // Ou um nome mais amigável
                'planDescription' => $this->subscription->product_description, // Ou um nome mais amigável
                'endsAt' => $this->subscription->ends_at ? $this->subscription->ends_at->format('d/m/Y') : 'Data de término do ciclo não definida',
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}