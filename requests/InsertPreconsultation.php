<?php

session_start();
spl_autoload_register(function ($class) {
    require '../models/'.$class.'.php';
});

$traitement = new TraitementFonction();
$objPost = new PreConsultation($_POST);

    if (isset($_POST['connection'])) {
       $traitement->InsertPreconsultation('InsertionPreconsultation', $objPost);
       echo 'Insertion réussi avec success';
    } else {
        $traitement->InsertPreconsultation('InsertionPreconsultation', $objPost);
       echo 'Insertion réussi avec success';
    }

