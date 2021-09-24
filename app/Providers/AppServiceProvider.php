<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::singleton('bot', function () {
            return $this->getBots();
        });
    }

    private function getBots()
    {
        $list = [];
        $botsDir = config('bots.dir');
        $exceptsBots = config('bots.excepts');

        foreach (glob($botsDir . '/*') as $dir) {
            if (!in_array(basename($dir), $exceptsBots)) {
                $list[] = basename($dir);
            }
        }

        $bot = request('bot', head($list));

        if ($bot) {
            $path = $botsDir . '/' . $bot . '/config/bot.php';
            $config = collection(require $path);

            initBotDatabaseConnection($config);

            try {
                DB::connection('bot')->getPdo();
            } catch (\Throwable $th) {
                header("Location: /settings?bot={$bot}&invalidDb=1");
                exit;
            }
        }

        return collection(['current' => $bot, 'list' => $list, 'config' => $config ?? collection([])]);
    }
}
