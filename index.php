<?php
use RestJS\App;

require __DIR__ . '/vendor/autoload.php';

/** Create Application */
$app = App::create(__DIR__);

// Application Execute or Run
$app->run();