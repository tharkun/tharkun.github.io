<?php

namespace Clever\Institut\Poe\Php\Events\Listener;

class MyListener
{
    public function onKernelRequest()
    {
        echo __METHOD__, "\n";
    }
}
