<?php
require_once("BL/UsuarisBL.php");

if ($_POST) {

    $usuari = new UsuarisBL();
    $resultat = $usuari->altaUsuari($_POST["nom"], $_POST["cognoms"], $_POST["email"], $_POST["alies"], $_POST["passwd"]);

    if ($resultat != 0) {

        header('Location: error.php');
    } else {
        header('Location: index.html');
    }
}
?>
