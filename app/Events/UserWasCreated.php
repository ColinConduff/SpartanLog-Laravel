<?php

namespace App\Events;

use App\User;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserWasCreated extends Event
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     * This event is fired in AuthController@create
     * The associated listener is 
     *     UserDefaultDataGeneration.php
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
