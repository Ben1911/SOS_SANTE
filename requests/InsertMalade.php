<?php

session_start();
spl_autoload_register(function ($class) {
    require '../models/'.$class.'.php';
});

$Medecin = new TraitementFonction();
$objPost = new Malade($_POST);


    if (isset($_POST['connection'])) {
        $Medecin->InsertMalade('InsertMalade', $objPost);
       echo 'Réussi avec success';
    } else  {
        $Medecin->InsertMalade('InsertMalade', $objPost);
       echo 'Modification réussi avec success';
    }  

