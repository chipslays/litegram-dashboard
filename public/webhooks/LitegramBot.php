<?php

$username = strtok(basename(__FILE__), '.');

require __DIR__ . "/../../app/Bots/{$username}/handlers/webhook.php";