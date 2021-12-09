<?php

class Medecin
{
    private $id='0';
    private $nomComplet;
    private $sexe;
    private $idqualite;
    private $phone;
    private $email;
    private $adresse;
    private $pswd;
    private $profil;

    public function __construct($donne)
    {
        $this->hydrate($donne);
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
     * Get the value of idqualite.
     */
    public function getIdqualite()
    {
        return $this->idqualite;
    }

    /**
     * Set the value of idqualite.
     *
     * @return self
     */
    public function setIdqualite($idqualite)
    {
        $this->idqualite = $idqualite;

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
     * Get the value of email.
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of adresse.
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse.
     *
     * @return self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

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

    /**
     * Get the value of profil.
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil.
     *
     * @return self
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}
