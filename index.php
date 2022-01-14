<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('projects', 'DefaultController');

Routing::get('calendary', 'DefaultController');
Routing::get('mainPage', 'DefaultController');
Routing::get('myData', 'DefaultController');
Routing::get('diet', 'DefaultController');
Routing::run($path);