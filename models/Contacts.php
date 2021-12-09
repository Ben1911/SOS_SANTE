<?php
class Contacts
{
    private $code;
    private $code_mala;
    private $nom_complet;
    private $sexe;
    private $adress;
    private $telephone;

    public function __construct($donnee)
    {
        $this->hydrate($donnee);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of code_mala
     */
    public function getCode_mala()
    {
        return $this->code_mala;
    }

    /**
     * Set the value of code_mala
     *
     * @return  self
     */
    public function setCode_mala($code_mala)
    {
        $this->code_mala = $code_mala;

        return $this;
    }

    /**
     * Get the value of nom_complet
     */
    public function getNom_complet()
    {
        return $this->nom_complet;
    }

    /**
     * Set the value of nom_complet
     *
     * @return  self
     */
    public function setNom_complet($nom_complet)
    {
        $this->nom_complet = $nom_complet;

        return $this;
    }

    /**
     * Get the value of sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
}
