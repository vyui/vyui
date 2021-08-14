<?php

define('VYUI_START', microtime(true));

/*----------------------------------------------------------------------------------------------------------------------
| Register the Applications Auto Loader
|-----------------------------------------------------------------------------------------------------------------------
| Include the autoload.php which comes from Composer. This is an automatically generated class loader for this
| Application. We'll include it once and this will automatically load classes in when needed.
|
*/

require_once './../vendor/autoload.php';

/*----------------------------------------------------------------------------------------------------------------------
| Bootstrap The Application
|-----------------------------------------------------------------------------------------------------------------------
| Upon the Application being built and returned, we can then handle incoming requests via the Application's designated
| Kernel.
|
*/

$application = require_once './../bootstrap/application.php';

/*----------------------------------------------------------------------------------------------------------------------
| Send the Response
|-----------------------------------------------------------------------------------------------------------------------
| Here we are going to be preparing and handling the request, building a response and then sending the response to the
| client.
|
*/

$response = (
    $kernel = $application->make('kernel')
)->handle(\Radiate\Http\Request::capture())->send();