<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Messages extends Component
{
    public $bot;

    public function mount($bot)
    {
        $this->bot = $bot;
    }

    public function render()
    {
        $query = DB::connection('bot')->table('messages');

        $query
            ->select('messages.*', 'users.fullname', 'users.blocked', 'users.banned')
            ->leftJoin('users', 'messages.user_id', '=', 'users.id');

        return view('livewire.messages', [
            'messages' => $query->paginate(24),
        ]);
    }

    private function connectToBotDb()
    {
        $path = config('bots.dir') . '/' . $this->bot . '/config/bot.php';
        $config = collection(require $path);
        initBotDatabaseConnection($config);
    }
}
