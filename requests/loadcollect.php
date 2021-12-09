<?php
require_once("../models/connexion.php");
if (!empty($_POST['country'])) {
    $query = "SELECT * FROM v_agent WHERE nom LIKE '" . $_POST['country'] . "%' ORDER BY nom";
    $result = $conn->query($query);
    if (!empty($result)) {
        echo "<ul id='countries'>";
        foreach ($result as $nom) {
?>
            <li onClick="selectCountry('<?php echo $nom["nom"]; ?>');"><?php echo $nom["nom"]; ?></li>

        <?php } ?>
        </ul>
<?php }
} ?>