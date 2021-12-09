<?php 

class Zone
{
    private $id;
    private  $designation_;
    private  $idAir;
    
    private $zoneDeSante;
    private $airDeSante;

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
    }public function getId()
    {
        return $this-> id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    } 
    public function getAirDeSante()
    {
        return $this-> airDeSante;
    }
    public function setAirDeSante($airDeSante)
    {
        $this->airDeSante = $airDeSante;
        return $this;
    }
     public function getZoneDeSante()
    {
        return $this->zoneDeSante;
    }
    public function setZoneDeSante($zoneDeSante)
    {
        $this->zoneDeSante = $zoneDeSante;
        return $this;
    } 
    public function getDesignation_()
    {
        return $this-> designation_;
    }
    public function setDesignation_($designation_)
    {
        $this->designation_ = $designation_;
        return $this;
    } 
   

    public function getIdAir()
    {
        return $this-> idAir;
    }
    public function setIdAir($idAir)
    {
        $this->idAir = $idAir;
        return $this;
    }
}



?>