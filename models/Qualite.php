<?php

class Qualite
{
    private $id='0';
    private $designation;
    private  $designation__;

    public function __construct($donnee)
    {
        $this->hydrate($donnee);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of designation.
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation.
     *
     * @return self
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }
    public function getDesignation__()
    {
        return $this-> designation__;
    }
    public function setDesignation__($designation__)
    {
        $this->designation__ = $designation__;
        return $this;
    } 
}
