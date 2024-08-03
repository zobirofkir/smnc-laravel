<?php
namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ConferenceInscriptionVerified
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;
    public string $password;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password= $password;
    }
}
