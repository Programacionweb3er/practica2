<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>

    <h1>Error</h1>

    <?php
    session_start();

    if (isset($_SESSION['errorNumber'])) {
        echo "Error número " . $_SESSION["errorNumber"] . ": " . $_SESSION["errorMsg"];
        unset($_SESSION['errorNumber']);
        unset($_SESSION["errorMsg"]);
    } else {
        echo "No hi ha cap error";
    }
    ?>

    <p>
        <a href="index.html">Tornar</a>
    </p>

</body>

</html>
