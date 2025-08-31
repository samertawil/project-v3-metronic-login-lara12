<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TechnicalSupportNotification extends Notification
{
    use Queueable;
    protected string $content;
    protected string $url;
    protected string $user_name;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $content,string $url,string $user_name) 
    {
        $this->onConnection('database'); // استخدام اتصال 'database'
         $this->content = $content;
        $this->url = $url;
        $this->user_name = $user_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database','broadcast'];
    }


    public function toBroadcast(object $notifiable): mixed
    {
   
        return [
            'content' =>  $this->content,
            'url' => $this->url,
            'user_name' => $this->user_name,
        ];
    }

    public function toDatabase(object $notifiable): mixed {
        return [
            'data'=>'new',
            'url'=>url('/'),
        ];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
          
            'content' =>  $this->content,
            'url' => $this->url,
            'user_name' => $this->user_name,
        
        ];
    }
}
