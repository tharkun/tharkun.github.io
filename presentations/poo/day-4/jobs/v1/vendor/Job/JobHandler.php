<?php

namespace Clever\Institut\Poe\Php\Job;

/**
 * Class JobHandler
 * @package Clever\Institut\Poe\Php\Job
 */
final class JobHandler
{
    /**
     * @param string $handler
     * @return Job
     */
    public function create($handler)
    {
        if (!self::isValid($handler))
        {
            throw new \RuntimeException('Invalid handler');
        }

        $class = self::getClass($handler);

        return new $class();
    }

    /**
     * @param $handler
     * @return string
     */
    private static function getClass($handler)
    {
        return __NAMESPACE__ . '\\Handler\\' . ucfirst($handler);
    }

    /**
     * @param $handler
     * @return bool
     */
    protected static function isValid($handler)
    {
        // Dans la vraie vie, ces valeurs proviennent d'un fichier de configuration quelconque, db ou autre
        $allowedHandlers = array(
            'type1',
            'type2',
        );

        if (in_array($handler, $allowedHandlers))
        {
            return class_exists(self::getClass($handler));
        }

        return false;
    }
}
