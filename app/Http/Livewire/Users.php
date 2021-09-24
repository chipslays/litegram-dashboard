<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Users extends Component
{
    public $bot;

    // query
    public $fullname = '';
    public $username = '';
    public $userId = '';
    public $source = '';
    public $sort = 'new';
    public $strong = true;
    public $period = false;
    public $dateFrom;
    public $dateTo;

    public function mount($bot)
    {
        $this->bot = $bot;
        $this->dateFrom = now()->subWeek()->format('Y-m-d');
        $this->dateTo = date('Y-m-d');
    }

    public function queryString()
    {
        $queryString = [
            'fullname' => ['except' => ''],
            'username' => ['except' => ''],
            'userId' => ['except' => ''],
            'source' => ['except' => ''],
            'sort' => ['except' => 'new'],
            'strong' => ['except' => true],
            'period' => ['except' => false],
        ];

        if ($this->period) {
            $queryString[] = 'dateFrom';
            $queryString[] = 'dateTo';
        }

        return $queryString;
    }

    public function render()
    {
        $this->connectToBotDb();

        $query = DB::connection('bot')->table('users');

        if ($this->fullname !== '') {
            $query->where('fullname', 'like', !$this->strong ? "%$this->fullname%" : $this->fullname);
        }

        if ($this->username !== '') {
            $query->where('username', 'like', !$this->strong ? "%$this->username%" : $this->username);
        }

        if ($this->userId !== '') {
            $query->where('id', 'like', !$this->strong ? "%$this->userId%" : $this->userId);
        }

        if ($this->source !== '') {
            $query->where('id', 'like', !$this->strong ? "%$this->source%" : $this->source);
        }

        if ($this->sort == 'new') {
            $query->orderBy('first_message', 'desc');
        }
        else if ($this->sort == 'old') {
            $query->orderBy('first_message', 'asc');
        }

        if ($this->period) {
            $from = strtotime("today", strtotime($this->dateFrom));
            $to = strtotime("tomorrow", strtotime($this->dateTo)) - 1;
            $query->whereBetween('first_message', [$from, $to]);
        }

        return view('livewire.users', [
            'users' => $query->paginate(16),
        ]);
    }

    private function connectToBotDb()
    {
        $path = config('bots.dir') . '/' . $this->bot . '/config/bot.php';
        $config = collection(require $path);
        initBotDatabaseConnection($config);
    }
}

