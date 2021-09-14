<?php

use Illuminate\Support\Facades\DB;

/**
 * @return array [$bot, $list, $config]
 */
function getBots()
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

        __initBotDatabaseConnection($config);

        if (request()->route()->getName() !== 'dashboard.settings' && request()->route()->getName() !== 'ajax.settings.save') {
            try {
                DB::connection('bot')->table('users')->first(['id']);
            } catch (\Throwable $th) {
                header("Location: /settings?bot={$bot}&invalidDb=1");
                exit;
            }
        }
    }

    return [$bot, $list, $config ?? collection([])];
}


function __initBotDatabaseConnection($config)
{
    $config = $config->get('plugins.database');

    $bot = $config['drivers'][$config['driver']];
    $bot['driver'] = $config['driver'];

    config(['database.connections.bot' => $bot]);
}
