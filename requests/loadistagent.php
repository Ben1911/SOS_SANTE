<?php

session_start();
spl_autoload_register(function ($class) {
    require('../models/' . $class . '.php');
});

$productManager = new ManagerProduct();

if (!empty($_POST['country'])) {

    $liste_vInfo = $productManager->load_vAgent($_POST['country']);

    foreach ($liste_vInfo as $listeprod) :
        echo ('
        <tr>
            <th scope="row">' . $listeprod['id'] . '</th>
            <td>' . $listeprod['nom'] . ' </td>
            <td>' . $listeprod['Sexe'] . ' </td>
        </tr>
    ');
    endforeach;
} else {

    echo '<script>window.alert("Aucune case ne doit rester vide."); </script>';
}
