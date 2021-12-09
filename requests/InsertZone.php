<?php

session_start();
spl_autoload_register(function ($class) {
    require '../models/'.$class.'.php';
});

$traitement = new TraitementFonction();
$objPost = new Zone($_POST);

    if (isset($_POST['connection'])) {
       $traitement->InsertZone('InsertionZone', $objPost);
    //    echo '<script>window.alert("Enregistrer avec succes"); </script>';
    //    echo '<script>window.location="../light/ListePatient.php"</script>';
      
       echo 'Réussi avec success';
    } else {
       // echo '<script>window.alert("Erreur."); </script>';
        echo 'Erreur.';
    }

