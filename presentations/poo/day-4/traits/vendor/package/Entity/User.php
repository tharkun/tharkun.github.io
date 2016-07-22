<?php

namespace Clever\Institut\Poe\Php\Entity;

use Clever\Institut\Poe\Php\Entity\Attribute\Id;
use Clever\Institut\Poe\Php\Entity\Attribute\CreatedDate;
use Clever\Institut\Poe\Php\Entity\Attribute\ModifiedDate;

/**
 * Class User
 * @package Clever\Institut\Poe\Php\Entity
 */
class User
{
    use Id;
    use CreatedDate, ModifiedDate;
    
    /**
     * @var
     */
    public $username;

    /**
     * user constructor.
     * @param array $row
     */
    public function __construct(array $row)
    {
        
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     * @return $this
     */
    public function setName($username)
    {
        $this->username = $username;
        return $this;
    }
}
