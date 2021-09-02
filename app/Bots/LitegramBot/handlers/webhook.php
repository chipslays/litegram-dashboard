<?php

use Litegram\Keyboard;
use Litegram\Debug\Payloads;

require __DIR__ . '/../autoload.php';

// $bot->webhook();
$bot->webhook(Payloads::START);

$bot->plugins($plugins);

foreach (glob(__DIR__ . '/../app/keyboards/*.php') as $keyboard) {
    Keyboard::add(require $keyboard);
}

foreach (glob(__DIR__ . '/../app/middlewares/*.php') as $middleware) {
    require $middleware;
}

require __DIR__ . '/../app/brain.php';

$bot->run();

