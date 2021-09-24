<?php

use Illuminate\Support\Facades\DB;

function initBotDatabaseConnection($config)
{
    $config = $config->get('plugins.database');

    $bot = $config['drivers'][$config['driver']];
    $bot['driver'] = $config['driver'];

    config(['database.connections.bot' => $bot]);
}
