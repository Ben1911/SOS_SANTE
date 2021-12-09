<?php

session_start();
spl_autoload_register(function ($class) {
    require '../models/'.$class.'.php';
});
$compteTrairtement = new TraitementFonction();

if (isset($_POST['connection'])) {
    $user = new User($_POST);

    $loginUser = $compteTrairtement->testAdmin('testAdmin', $user);

    if (count($loginUser) > 0) {
        foreach ($loginUser as $login) {
            $_SESSION['nomuser'] = $login->getNomuser();
            $_SESSION['pswd'] = $login->getPswd();
        }
        echo '<script>window.location="../light/index.php"</script>';
    } else {
        echo 'Nom d\'utilisateur ou mot de passe incorrect.';
        // echo '<script>window.alert("Nom d\'utilisateur ou mot de passe incorrect."); </script>';
        // echo '<script>window.location="../light/login.php"</script>';
    }
} elseif (isset($_POST['connection1'])) {
    if (empty($_POST['mail']) || empty($_POST['psw'])) {
        echo '<script>window.alert("Aucune n\'est doit resté vide!"); </script>';
        echo '<script>window.location="../production/login.php#signup"</script>';
    } else {
        $medecin = new Medecin($_POST);

        $testmedecin = $compteTrairtement->tUserVolontaire('testUser2', $medecin);

        if (count($testmedecin) > 0) {
            foreach ($testmedecin as $login) {
                $_SESSION['mail'] = $login->getMail();
            }
            $compteTrairtement->UpdateMedecin('updatecompte', $medecin);
            echo '<script>window.alert("Vous avez modifier votre compte!"); </script>';
            echo '<script>window.location="../production/login.php"</script>';
        } else {
            echo '<script>window.alert("Votre mail n\'est pas reconnu dans le système!"); </script>';
            echo '<script>window.location="../production/login.php#signup"</script>';
        }
    }
}
