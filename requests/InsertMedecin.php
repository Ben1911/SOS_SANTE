<?php

session_start();
spl_autoload_register(function ($class) {
    require '../models/'.$class.'.php';
});
$TraitMed = new TraitementFonction();
$objPost = new Medecin($_POST);

$extension = ['image/jpeg', 'image/jpg', 'image/png'];

    if (isset($_POST['connection'])) {
        if (in_array($_FILES['profil']['type'], $extension)) {
            $photo = $_POST['nomComplet'].time().'_'.$_FILES['profil']['name'];
            $chemin = '../images_post/'.$photo;
            $objPost->setProfil($photo);

            if (move_uploaded_file($_FILES['profil']['tmp_name'], $chemin)) {
                $TraitMed->InsertMedecin('InsertMedecin', $objPost);
                echo 'Enregistrer avec success';
            } else {
                $objPost->setProfil('Pas de photo');
                $TraitMed->InsertMedecin('InsertMedecin', $objPost);
                echo 'Enregistrer avec success';
            }
        }
   
    } else {
        $TraitMed->InsertMedecin('InsertMedecin', $objPost);
        echo 'Modification avec success';
    }
