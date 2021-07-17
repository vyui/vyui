<?php

/*----------------------------------------------------------------------------------------------------------------------
| Register the Applications Auto Loader
|-----------------------------------------------------------------------------------------------------------------------
| Include the autoload.php which comes from Composer. This is an automatically generated class loader for this
| Application. We'll include it once and this will automatically load classes in when needed.
|
*/

require_once '../vendor/autoload.php';

$application = new \Radiate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

var_dump($application);