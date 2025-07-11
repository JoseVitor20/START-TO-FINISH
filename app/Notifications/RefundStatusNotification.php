<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Refund;

class RefundStatusNotification extends Notification
{
    public $refund;

    public function __construct(Refund $refund)
    {
        $this->refund = $refund;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $statusText = '';
        switch ($this->refund->status) {
            case 'pending':
                $statusText = 'pendente de análise';
                break;
            case 'approved':
                $statusText = 'aprovado e aguardando processamento';
                break;
            case 'rejected':
                $statusText = 'rejeitado';
                break;
            case 'processed':
                $statusText = 'processado com sucesso';
                break;
            default:
                $statusText = $this->refund->status;
        }

        return (new MailMessage)
            ->subject('Atualização do Status do Seu Reembolso')
            ->greeting('Olá ' . $this->refund->user->name . ',')
            ->line('O status da sua solicitação de reembolso para o pedido #' . $this->refund->order->id . ' foi atualizado para: **' . ucfirst($statusText) . '**.')
            ->action('Ver Detalhes do Reembolso', url('/meus-comprovantes')) // Link para a página de comprovantes do usuário
            ->line('Se você tiver alguma dúvida, por favor, entre em contato conosco.')
            ->salutation('Atenciosamente, Sua Equipe de Suporte');
    }
}
