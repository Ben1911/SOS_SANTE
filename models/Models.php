<?php
abstract class Models
{
    private $conne;
    // private $bd = "";
    // private $user = "";
    // private $pass = "";
    private function setBd()
    {
        $this->conne = new PDO('mysql:host=127.0.0.1; dbname=sos_sante; charset=UTF8', 'root', '');
        $this->conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    protected function getBd()
    {
        if ($this->conne == null)
            $this->setBd();
        return $this->conne;
    }
    protected function getAll($table, $obj)
    {
        $var = [];
        $query = $this->getBd()->prepare('SELECT * FROM ' . $table);
        $query->execute();
        while ($donnee = $query->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($donnee);
        }
        return $var;
    }
    
    protected abstract function InsertUser($procedure, $objet);
    protected abstract function InsertMedecin($procedure, $objet);
    protected abstract function InsertMalade($procedure, $objet);
    protected abstract function InsertContact($procedure, $objet);
    protected abstract function InsertZone($procedure, $objet);
    protected abstract function InsertAir($procedure, $objet);
    protected abstract function InsertQualite($procedure, $objet);
    protected abstract function InsertPreconsultation($procedure, $objet);
}
