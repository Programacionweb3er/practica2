<?php
session_start();

require_once("BL/UsuarisBL.php");

if ($_POST) {
    $usuaris = new UsuarisBL();
    
    
    $username = $_POST['username'];
    $password = $_POST['passwd'];

    
    $user = $usuaris->getUserByUsername($username);

    if ($user && password_verify($password, $user['passwd'])) {
        $_SESSION['alies'] = $user['alies'];
        header('Location: dashboard.php');
        exit();
    } else {
        
        $_SESSION["errorNumber"] = 3;
        $_SESSION["errorMsg"] = "Credenciales inválidas";
        header('Location: error.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    
    <form method="post" action="index.php">
        
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Contraseña">
        
        <button type="submit">Login</button>
    </form>
    
    <a href="alta.html">Registrarse</a>
    
</body>
</html>