<?php

namespace Clever\Institut\Poe\Php\Tasks;

class Status
{
    private $id;
    
    private $name;

    /**
     * Status constructor.
     * @param array $result
     */
    public function __construct(array $result)
    {
        $this->id = $result['id'];
        $this->name = $result['name'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Task
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Status
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
