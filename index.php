<?php
use Codelab\Handlers\RedirectionHandler;
require_once __DIR__ . '/vendor/autoload.php';

$route = 'http://codelab.emilggrozdanov.online/';

(new RedirectionHandler($route))
    ->changeInterval(2)
    ->redirect();
