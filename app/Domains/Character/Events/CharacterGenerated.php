<?php

namespace App\Domains\Character\Events;

use App\Domains\Character\Models\Character;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CharacterGenerated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Character $character;

    /**
     * Create a new event instance.
     */
    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }

    public function getCharacter(): Character
    {
        return $this->character;
    }
}
