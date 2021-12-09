<?php
class ViewBd
{
    private $code;
    private $nom_malade;

    public function __construct(array $donnee)
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
    public function getNom_malade()
    {
        return $this->nom_malade;
    }

    /**
     * Set the value of code_mala
     *
     * @return  self
     */
    public function setNom_malade($nom_malade)
    {
        $this->nom_malade = $nom_malade;

        return $this;
    }

}
?>