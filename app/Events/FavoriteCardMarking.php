<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FavoriteCardMarking
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userid;
    public $cardid;
    public $image;
    public $cardname;

    /**
     * Create a new event instance.
     */
    public function __construct($userid, $cardid, $image, $cardname)
    {
        $this->userid = $userid;
        $this->cardid = $cardid;
        $this->cardname = $cardname;
        $this->image = $image;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
