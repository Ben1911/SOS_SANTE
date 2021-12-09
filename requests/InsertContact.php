<?php
session_start();
spl_autoload_register(function ($class) {
    require('../models/' . $class . '.php');
});

$Medecin = new TraitementFonction();
$objPost = new Contacts($_POST);

if (
    empty($_POST['code_mala']) || empty($_POST['nom_complet']) || empty($_POST['sexe']) || empty($_POST['adress']) || empty($_POST['telephone'])
) {
    echo '<script>window.alert("Aucune case n\' est doit rester vide!"); </script>';
    echo '<script>window.location="../production/form_contact.php"</script>';
} else {

    if (isset($_POST['connection'])) {
        $Medecin->InsertContact('InsertContact', $objPost);
        echo '<script>window.alert("Enregistrer avec succes"); </script>';
        echo '<script>window.location="../production/form_contact.php"</script>';
    } else {
        echo '<script>window.alert("Erreur."); </script>';
    }
}
