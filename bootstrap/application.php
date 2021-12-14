<?php

/*----------------------------------------------------------------------------------------------------------------------
| Instantiate The Application.
|-----------------------------------------------------------------------------------------------------------------------
| Setup the foundations of the application. Thus the first thing the project is going to do is instantiate the
| Application and return it to the parent script where this was called.
|
*/

$application = new \Radiate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);


/*----------------------------------------------------------------------------------------------------------------------
| Return The Application
|-----------------------------------------------------------------------------------------------------------------------
| This particular script's intention is to separate the building of the application to the running of the application.
| Return the application to the script of which this was called from.
|
*/

return $application;