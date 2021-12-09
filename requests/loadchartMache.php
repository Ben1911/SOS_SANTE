<?php
require_once('../models/connexion1.php');


if ($_POST["action"] == 'fetch') {

    if (!empty($_POST['product']) || !empty($_POST['marche']) && !empty($_POST['date1']) && !empty($_POST['date2'])) {
        $query = "
             SELECT ID_P AS ID,pu,produits as produit ,concat(produits,' / ',Marche,' / ', date) as produits,Marche,nom_Ambassadeur,date 
              FROM `v_infosmarche_ok` where  Marche ='" . $_POST['marche'] . "' and date >= '" . $_POST['date1'] . "' and date <= '" . $_POST['date2'] . "'
		     ";

        $result = $connect->query($query);

        $data = array();

        foreach ($result as $row) {
            $data[] = array(
                'produits'        =>    $row["produits"],
                'pu'              =>    $row["pu"],
                'date'            =>   $row["date"]
            );
        }
        echo json_encode($data);
    } else {
        echo '<script>window.alert("Aucune case ne doit resté vide."); </script>';
    }
}
