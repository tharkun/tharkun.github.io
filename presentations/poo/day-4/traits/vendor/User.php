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
    /**
     * @var
     */
    public $id;

    /**
     * @var
     */
    public $createdDate;

    /**
     * @var
     */
    public $modifiedDate;
    
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
    }/**
 * @return mixed
 */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param $createdDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param $modifiedDate
     * @return $this
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
        return $this;
    }
}
