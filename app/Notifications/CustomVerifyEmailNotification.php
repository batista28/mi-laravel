<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\VerifyEmail;




class CustomVerifyEmailNotification extends VerifyEmail
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        // Llamada al método verificationUrl para obtener la URL de verificación
        $verificationUrl = $this->verificationUrl($notifiable);

        return(new MailMessage)
            ->subject('Verifica tu dirección de correo electrónico')
            ->greeting('Hola!')
            ->line('Tu cuenta ha sido creada. Por favor, haz clic en el siguiente botón para verificar tu dirección de correo electrónico.')
            ->action('Verificar Correo Electrónico', $verificationUrl)
            ->line('Si no creaste una cuenta, no se requiere ninguna acción adicional.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
