<?php

session_start();
spl_autoload_register(function ($class) {
    require('../models/' . $class . '.php');
});

$productManager = new ManagerProduct();

if (empty($_POST['country']) &&  empty($_POST['date1']) &&  empty($_POST['date2'])) {
    echo '<script>window.alert("Aucune case ne doit rester vide."); </script>';
} else {
    $liste_vInfo = $productManager->load_vInfoMarche_collection($_POST['country'], $_POST['date1'], $_POST['date2']);
}
foreach ($liste_vInfo as $listeprod) :
    echo ('
    <tr>
        <th scope="row">' . $listeprod['Id'] . '</th>
        <td>' . $listeprod['produits'] . ' </td>
        <td>' . $listeprod['Marche'] . ' </td>
        <td>' . htmlspecialchars($listeprod['categorie']) . ' </td>
        <td>' . $listeprod['pu'] . '' . $listeprod['devise'] . '</td>
        <td>' . $listeprod['Qte'] . '</td>
        <td>' . $listeprod['nom_Ambassadeur'] . '</td>
        <td>' . $listeprod['date'] . '</td>
    </tr>
');
endforeach;
