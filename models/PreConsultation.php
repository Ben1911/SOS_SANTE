<?php

class Preconsultation
{
    private  $id='0';
    private  $temperation;
    private  $tension;
    private  $frequenceCardiaque;
    private  $frequenceRespiration;
    private  $saturationEnOxygene;
    private  $idMalade;
    private  $idMedecin;

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
    public function getId()
    {
        return $this->id;
    }   
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getTemperation()
    {
        return $this->emperation;
    }
    public function setTemperation($temperation)
    {
        $this->temperation = $temperation;
        return $this;
    }

    public function getTension()
    {
        return $this-> tension;
    }
    public function setTension($tension)
    {
        $this->tension = $tension;
        return $this;
    }      
    public function getTrequenceCardiaque()
    {
        return $this-> frequenceCardiaque;
    }
    public function setFrequenceCardiaque($frequenceCardiaque)
    {
        $this->frequenceCardiaque = $frequenceCardiaque;
        return $this;
    }   
    public function getFrequenceRespiration()
    {
        return $this-> frequenceRespiration;
    }
    public function setFrequenceRespiration($frequenceRespiration)
    {
        $this->frequenceRespiration = $frequenceRespiration;
        return $this;
    }  
    public function getSaturationEnOxygene()
    {
        return $this-> saturationEnOxygene;
    }
    public function setSaturationEnOxygene($saturationEnOxygene)
    {
        $this->saturationEnOxygene = $saturationEnOxygene;
        return $this;
    } 
    public function getIdMalade()
    {
        return $this-> idMalade;
    }
    public function setIdMalade($idMalade)
    {
        $this->idMalade = $idMalade;
        return $this;
    } 
    public function getIdMedecin()
    {
        return $this-> idMedecin;
    }
    public function setIdMedecin($idMedecin)
    {
        $this->idMedecin = $idMedecin;
        return $this;
    } 

}
