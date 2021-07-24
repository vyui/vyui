<?php

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

var_dump(app());