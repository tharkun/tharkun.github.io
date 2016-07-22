<?php

namespace Clever\Institut\Poe\Php\Tasks;

class CustomFields
{
    /**
     * @var CustomField[] 
     */
    protected $fields = array();

    /**
     * @return CustomField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param CustomField[] $fields
     * @return CustomFields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param CustomField $customField
     * @return $this
     */
    public function addField(CustomField $customField)
    {
        $this->fields[] = $customField;
        
        return $this;
    }

    /**
     * @param $name
     * @return CustomField
     */
    public function get($name)
    {
        foreach ($this->fields as $customField)
        {
            if ($customField->getName() == $name)
            {
                return $customField;
            }
        }
        
        throw new \InvalidArgumentException('Unknown custom field');
    }

}
