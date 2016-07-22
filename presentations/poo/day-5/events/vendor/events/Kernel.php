<?php

namespace Clever\Institut\Poe\Php\Events;

use Clever\Institut\Poe\Php\Events\Event\Init;
use Clever\Institut\Poe\Php\Events\Event\Request;
use Clever\Institut\Poe\Php\Events\Event\Response;

class Kernel
{
    /**
     * @var Dispatcher
     */
    private $dispatcher;

    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
    }

    public function run()
    {
        //
        // Some code
        //

        echo "Kernel initiation\n";
        $this->dispatcher->trigger(Init::NAME);

        //
        // Some code
        //

        echo "Kernel request\n";
        $this->dispatcher->trigger(Request::NAME);

        //
        // Some code
        //

        echo "Kernel response\n";
        $this->dispatcher->trigger(Response::NAME);

        //
        // Some code
        //
    }
}
