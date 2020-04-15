<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Discord\DiscordChannel;
use NotificationChannels\Discord\DiscordMessage;

class ContactNotification extends Notification
{
    use Queueable;

    public $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [DiscordChannel::class];
    }


    public function toDiscord($notifiable)
    {
        return DiscordMessage::create('',[
            'type' => 'rich',
            'title' => ':mailbox_with_mail: Hello new',
            'fields' => [
                [
                    'name' => ':moneybag: Budget',
                    'value' => $this->contact->budgets()->pluck('name_fr')->implode("\n"),
                    'inline' => true,
                ],
                [
                    'name' => 'Deliveries',
                    'value' => $this->contact->deliveries()->pluck('name_fr')->implode("\n"),
                    'inline' => true,
                ],
                [
                    'name' => ':joy: Services',
                    'value' => $this->contact->services()->pluck('name_fr')->implode("\n"),
                    'inline' => true,
                ],
            ],
            'description'=>$this->contact->message,
            'author' => [
                'name' => $this->contact->name." ".$this->contact->email,
            ]
        ]);
    }
}
