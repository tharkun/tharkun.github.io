<?php

namespace Clever\Institut\Poe\Php\Tasks;

class Task
{
    private $id;

    private $title;

    private $description;

    /**
     * @var Status
     */
    private $status;

    private $author;

    private $createdDate;

    private $modifiedDate;

    /**
     * @var CustomField[]
     */
    private $customFields = array();

    /**
     * Task constructor.
     * @param array $result
     */
    public function __construct(array $result)
    {
        $this->id = $result['id'];
        $this->title = $result['title'];
        $this->description = $result['description'];
        $this->status = new Status($result['status']);
        $this->author = $result['author'];
        $this->createdDate = $result['createdDate'];
        $this->modifiedDate = isset($result['modifiedDate']) ? $result['modifiedDate'] : null;

        if (isset($result['customFields']))
        {
            $this->customFields = new CustomFields();
            foreach ($result['customFields'] as $customField)
            {
                $this->customFields->addField(new CustomField($customField));
            }
        }
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Task
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return Task
     */
    public function setAuthor($author)
    {
        $this->author = $author;
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
     * @param mixed $createdDate
     * @return Task
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
     * @param mixed $modifiedDate
     * @return Task
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     * @return Task
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
        return $this;
    }


}
