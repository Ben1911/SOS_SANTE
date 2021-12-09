<?php

class User
{
    private $id;
    private $nomuser;
    private $pswd;

    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }

    private function hydrate(array $data)
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
     * Get the value of nomuser.
     */
    public function getNomuser()
    {
        return $this->nomuser;
    }

    /**
     * Set the value of nomuser.
     *
     * @return self
     */
    public function setNomuser($nomuser)
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    /**
     * Get the value of pswd.
     */
    public function getPswd()
    {
        return $this->pswd;
    }

    /**
     * Set the value of pswd.
     *
     * @return self
     */
    public function setPswd($pswd)
    {
        $this->pswd = $pswd;

        return $this;
    }
}
