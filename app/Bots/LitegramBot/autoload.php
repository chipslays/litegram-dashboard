<?php

require __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/bot.php';
$plugins = require __DIR__ . '/bootstrap/plugins.php';
$components = require __DIR__ . '/bootstrap/components.php';

$config['components'] = $components;

$bot = bot($config);