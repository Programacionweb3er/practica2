<?php
session_start();

if (!isset($_SESSION['alies'])) {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }

        h1 {
            color: #007bff;
            text-align: center;
        }

        p {
            color: #555;
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenido al Dashboard</h1>
        <p>¡Hola, <?= $_SESSION['alies'] ?>! Has iniciado sesión correctamente.</p>
        <p><a href="index.html">Cerrar sesión</a></p>
    </div>
</body>

</html>
