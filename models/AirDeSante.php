<?php 

class AirDeSante
{
    private $id;
    private  $designation;
    private  $airDeSante;
    

    public function __construct(array $donnee)
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
    public function getId()
    {
        return $this-> id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    } 
    public function getDesignation()
    {
        return $this-> designation;
    }
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    } 
   

}



?>