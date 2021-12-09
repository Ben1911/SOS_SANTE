<?php
require_once('../models/connexion1.php');


if ($_POST["action"] == 'fetch') {

    if (!empty($_POST['country']) && !empty($_POST['date1']) && !empty($_POST['date2'])) {
        $query = "
             SELECT count(ID) as id,pu,nom_Ambassadeur,date 
              FROM `v_infosmarche_ok` where nom_Ambassadeur ='" . $_POST['country'] . "' and  date >= '" . $_POST['date1'] . "' and date <= '" . $_POST['date2'] . "' GROUP BY date
		     ";

        $result = $connect->query($query);

        $data = array();

        foreach ($result as $row) {
            $data[] = array(
                'id'        =>    $row["id"],
                'date'            =>   $row["date"]
            );
        }
        echo json_encode($data);
    } else {
        echo '<script>window.alert("Aucune case ne doit resté vide."); </script>';
    }
}
