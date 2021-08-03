<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\MitraMaps;

class EventReadyMitra implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id_customers;
    public $MitraMaps;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($customers, MitraMaps $MitraMaps)
    {
        $this->id_customers = $customers;
        $this->MitraMaps = $MitraMaps;
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {       
        //return new PrivateChannel('channel-name');
        return 'order-ready.'.$this->id_customers;
    }
}
