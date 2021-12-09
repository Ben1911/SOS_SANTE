<?php

class TraitementFonction extends Models
{
    public function getUtilisateur()
    {
        return $this->getAll('universite', 'User');
    }

    public function getQualite()
    {
        return $this->getAll('Qualite', 'Qualite');
    }

    public function getSigne()
    {
        return $this->getAll('Signe', 'Signe');
    }

    public function getMalade()
    {
        return $this->getAll('malade', 'Malade');
    }
    public function getMedecin()
    {
        return $this->getAll('v_listeMedecin', 'Medecin');
    } 
    public function getAllMedecinById($id)
    {
        return $this->getAll('v_listeMedecin where id='.$id.'', 'Medecin');
    } 
    public function getAllMaladeById($id)
    {
        return $this->getAll('malade where id='.$id.'', 'Malade');
    }

    public function getComboAir()
    {
        return $this->getAll('airdesante', 'AirDeSante');
    }

    public function getZone()
    {
        return $this->getAll('v_listezone', 'Zone');
    } 
    public function getPreconsultation()
    {
        return $this->getAll('v_listeConsultation ', 'Preconsultation');
    } 
   

    // ----------------------- Begin insert -----------------------------------------
    public function InsertMalade($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?,?,?,?,?,?,?)');
        $rqt->execute([
            $obj->getNomComplet(), $obj->getSexe(), $obj->getPhone(), $obj->getAdresse(),
            $obj->getNationalite(), $obj->getProvince(),  $obj->getId(),
        ]);
    }

    public function InsertMedecin($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?,?,?,?,?,?,?,?)');
        $rqt->execute([
          $obj->getNomComplet(), $obj->getSexe(), $obj->getPhone(),
            $obj->getEmail(), $obj->getAdresse(), $obj->getProfil(), $obj->getId(),$obj->getPswd(),]);
    }
    public function InsertQualite($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?,?)');
        $rqt->execute([$obj->getId(), $obj->getDesignation__()]);
    }

    public function InsertZone($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?,?)');
        $rqt->execute([$obj->getDesignation_(), $obj->getIdAir()]);
    }

    public function InsertAir($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?)');
        $rqt->execute([$obj->getDesignation()]);
    }

    public function InsertContact($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?,?,?,?,?)');
        $rqt->execute([
            $obj->getNom_complet(),
            $obj->getCode_mala(), $obj->getSexe(),
            $obj->getAdress(), $obj->getTelephone(),
        ]);
    }  
    public function InsertPreconsultation($procedure, $obj)
    {
        $rqt = $this->getBd()->prepare(' CALL '.$procedure.'(?,?,?,?,?,?,?,?)');
        $rqt->execute([ $obj->getId(), $obj->getTemperature(), $obj->getTension(),
            $obj->getTrequenceCardiaque(), $obj->getFrequenceRespiration(),
            $obj->getSaturationEnOxygene(),$obj->getIdMalade(),$obj->getIdMedecin(),
        ]);
    }   
    
    // ----------------------- end insert -----------------------------------------

    public function testAdmin($procedure, $obj)
    {
        $var = [];
        $query = $this->getBd()->prepare('CALL '.$procedure.' (?,?)');
        $query->execute([$obj->getNomuser(), $obj->getPswd()]);
        while ($donnee = $query->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($donnee);
        }

        return $var;
    }

    public function tUserVolontaire($procedure, $obj)
    {
        $var = [];
        $query = $this->getBd()->prepare('CALL '.$procedure.' (?)');
        $query->execute([$obj->getMail()]);
        while ($donnee = $query->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($donnee);
        }

        return $var;
    }

    public function InsertUser($procedure, $obj)
    {
        $query = $this->getBd()->prepare('CALL '.$procedure.' (?,?)');
        $query->execute([$obj->getMail(), $obj->getPsw()]);
    }
}
