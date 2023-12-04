<?php
session_start();

if ($_POST) {
    require_once("BL/UsuarisBL.php");

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

    $usuaris = new UsuarisBL();
    $user = $usuaris->getUserByUsername($username);

    if ($user) {
        if (password_verify($passwd, $user['passwd'])) {
           
            $_SESSION['alies'] = $user['alies'];
            $_SESSION['passwd'] = $passwd;
            header('Location: dashbord.php');
            exit();
        }
    }

    
    $_SESSION["errorNumber"] = 3; 
    $_SESSION["errorMsg"] = "Credenciales inválidas";
    header('Location: error.php');
    exit();
} else {
    
    header('Location: index.html');
    exit();
}
?>