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
        $dataDiscord = [
            'type' => 'rich',
            'title' => ':mailbox_with_mail: Hello!! Ready to make money',
            'fields' => [

            ],
            'url' => url('/admin/contact/'.$this->contact->id.'/show'),
            'author' => [
                'name' => $this->contact->name.' ('.$this->contact->email.')',
            ],
        ];

        if ($this->contact->budgets()->count()) {
            $dataDiscord['fields'][] = [
                'name' => ':moneybag: Budget',
                'value' => $this->contact->budgets()->pluck('name_fr')->implode("\n"),
                'inline' => true,
            ];
        }

        if ($this->contact->deliveries()->count()) {
            $dataDiscord['fields'][] = [
                'name' => ':timer: Deliveries',
                'value' => $this->contact->deliveries()->pluck('name_fr')->implode("\n"),
                'inline' => true,
            ];
        }

        if ($this->contact->services()->count()) {
            $dataDiscord['fields'][] = [
                'name' => ':jigsaw: Services',
                'value' => $this->contact->services()->pluck('name_fr')->implode("\n"),
                'inline' => true,
            ];
        }

        if (strlen($this->contact->message) > 2048) {
            $dataDiscord['description'] = substr($this->contact->message, 0, 2020).'... [link to see more]';
        } else {
            $dataDiscord['description'] = $this->contact->message;
        }

        return DiscordMessage::create('', $dataDiscord);
    }
}
