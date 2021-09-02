<?php

use Litegram\Bot;
use Litegram\Keyboard;
use Litegram\Support\Collection;

require __DIR__ . '/../autoload.php';

$bot->longpoll(function (Collection $payload, Bot $bot) use ($plugins) {
    $bot->plugins($plugins);

    foreach (glob(__DIR__ . '/../app/keyboards/*.php') as $keyboard) {
        Keyboard::add(require $keyboard);
    }

    foreach (glob(__DIR__ . '/../app/middlewares/*.php') as $middleware) {
        require $middleware;
    }

    require __DIR__ . '/../app/brain.php';

    $bot->cli->log($payload->toArray());
});