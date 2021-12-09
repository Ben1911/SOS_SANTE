<?php
class ManagerProduct extends Models
{
    /**
     *
     * @param mixed $procedure;
     * @param mixed $objet;
     *
     * @return mixed
     */

    public function Insert($procedure, $objet)
    {
    }

    public function load()
    {
        try {
            $row = [];
            $query = $this->getBd()->prepare("SELECT ID,designation  FROM produits");
            $query->execute();
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $row[] = $data;
            }
            return $row;
        } catch (Exception $ex) {
            throw new Exception("error : " . $ex->getMessage());
        }
    }
    public function load_marche()
    {
        try {
            $row = [];
            $query = $this->getBd()->prepare("SELECT code,nom  FROM marche");
            $query->execute();
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $row[] = $data;
            }
            return $row;
        } catch (Exception $ex) {
            throw new Exception("error : " . $ex->getMessage());
        }
    }


    public function load_vInfoMarche($idProd, $marche, $date1, $date2)
    {
        try {
            $row = [];
            $query = $this->getBd()->prepare("SELECT * FROM v_infosmarche_ok WHERE ID_P = ? and marche = ? and date >= ? and date <= ? ");
            $query->execute(array($idProd, $marche, $date1, $date2));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $row[] = $data;
            }
            return $row;
        } catch (Exception $ex) {
            throw new Exception("error : " . $ex->getMessage());
        }
    }
    public function load_vInfoMarche_collection($coll, $date1, $date2)
    {
        try {
            $row = [];
            $query = $this->getBd()->prepare("SELECT * FROM v_infosmarche_ok WHERE nom_Ambassadeur = ? and  date BETWEEN ? AND ? ");
            $query->execute(array($coll, $date1, $date2));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $row[] = $data;
            }
            return $row;
        } catch (Exception $ex) {
            throw new Exception("error : " . $ex->getMessage());
        }
    }
    public function load_vAgent($coll)
    {
        try {
            $row = [];
            $query = $this->getBd()->prepare("SELECT * FROM v_agent WHERE nom= ?");
            $query->execute(array($coll));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $row[] = $data;
            }
            return $row;
        } catch (Exception $ex) {
            throw new Exception("error : " . $ex->getMessage());
        }
    }
    public function load_chart()
    {
        try {
            $val = '';
            $query = $this->getBd()->prepare("SELECT ID_P AS ID,pu, Qte ,date  FROM v_infosmarche_ok ");
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {

                $val .= "{date:'" . $data["date"] . "',pu:" . $data["pu"] . ", Qte:" . $data["Qte"] . "}, ";
            }
            return $val = substr($val, 0, -2);
        } catch (exception $ex) {
            throw new Exception("error: " . $ex->getMessage());
        }
    }
}
