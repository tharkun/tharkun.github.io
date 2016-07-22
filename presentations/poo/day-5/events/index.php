<?php

include "vendor/events/Event.php";
include "vendor/events/Event/Init.php";
include "vendor/events/Event/Request.php";
include "vendor/events/Event/Response.php";
include "vendor/events/Dispatcher.php";
include "vendor/events/Kernel.php";

include "vendor/events/Listener/MyListener.php";

use Clever\Institut\Poe\Php\Events\Kernel;

$kernel = new Kernel();
$kernel->run();
