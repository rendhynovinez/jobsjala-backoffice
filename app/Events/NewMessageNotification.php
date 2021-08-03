<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Message;
use App\CustomerOrderToMitra;

class NewMessageNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name;
    public $message;
    public $CustomerOrderToMitra;
 
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message, CustomerOrderToMitra $CustomerOrderToMitra, $name)
    {
        $this->name = $name;
        $this->message = $message;
        $this->CustomerOrderToMitra = $CustomerOrderToMitra;
    }
 
    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['user.'.$this->message->to];
       //return new PrivateChannel('user.'.$this->message->to);
    }
}
