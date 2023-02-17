<?php
require __DIR__ . '/src/Handlers/RedirectionHandler.php';
$route = 'http://codelab.emilggrozdanov.online/';

(new RedirectionHandler($route))->redirect();
