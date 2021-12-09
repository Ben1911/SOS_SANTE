<?php

class Malade
{
    private $id;
    private $nomComplet;
    private $sexe;
    private $phone;
    private $adresse;
    private $nationalite;
    private $province;

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

    /**
     * Get the value of sexe.
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe.
     *
     * @return self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of phone.
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of code.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of code.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Adress.
     */

    /**
     * Get the value of nationalite.
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get the value of province.
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set the value of province.
     *
     * @return self
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get the value of adress.
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adress.
     *
     * @return self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of nomComplet.
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet.
     *
     * @return self
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
}
