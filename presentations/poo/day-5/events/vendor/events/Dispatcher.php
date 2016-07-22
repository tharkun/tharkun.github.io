<?php

namespace Clever\Institut\Poe\Php\Events;

class Dispatcher
{
    /**
     * @var array
     */
    private $listeners = array();

    public function __construct()
    {
        // This should be done via configuration file
        $this->addListener(\Clever\Institut\Poe\Php\Events\Event\Request::NAME, array('Clever\Institut\Poe\Php\Events\Listener\MyListener', 'onKernelRequest'));
    }

    /**
     * @param $name
     * @param $callback
     */
    public function addListener($name, $callback)
    {
        $this->listeners[$name][] = $callback;
    }

    /**
     * @param $name
     */
    public function trigger($name)
    {
        if (isset($this->listeners[$name]))
        {
            foreach ($this->listeners[$name] as $listener)
            {
                call_user_func_array($listener, array($this));
            }
        }
    }
}
