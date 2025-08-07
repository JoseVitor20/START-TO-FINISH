<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User; // Importe o modelo User

class SubscriptionCanceledNow extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subscription;
    public $productName; // Adicione esta propriedade para o nome amigável do produto

    public function __construct(User $user, $subscription, string $productName)
    {
        $this->user = $user;
        $this->subscription = $subscription;
        $this->productName = $productName; // Atribua o nome do produto aqui
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sua Assinatura Foi Cancelada Imediatamente!', // Talvez um título mais específico
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscriptions.cancelednow',
            with: [
                'userName' => $this->user->name,
                'planName' => $this->productName, // Use o nome do produto passado
                'endsAt' => $this->subscription->ends_at ? $this->subscription->ends_at->format('d/m/Y') : null, // Mantenha a lógica de data
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}