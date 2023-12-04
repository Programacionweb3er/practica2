<?php



function sanitizeNOM($nom)
{
    $nom = trim($nom);
    $nom = strtoupper($nom);
    return $nom;
}

function sanitizeCOGNOMS($cognoms)
{
    $cognoms = trim($cognoms);
    $cognoms = strtoupper($cognoms);
    return $cognoms;
}

function sanitizeEMAIL($email)
{
    $email = trim($email);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return $email;
}

function sanitizeALIES($alias)
{
    $alias = trim($alias);
    $alias = filter_var($alias, FILTER_SANITIZE_STRING);
    return $alias;
}

function sanitizePASSWD($passwd)
{
    $passwd = trim($passwd);
    return $passwd;
}



function validaNOM($nom)
{
    $patternnom = "/^[A-Za-zñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ, ]{2,}$/";
    return preg_match($patternnom, $nom);
}

function validaCOGNOMS($cognoms)
{
    $patterncognom = "/^[A-Za-zñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ, ]{2,}$/";
    return preg_match($patterncognom, $cognoms);
}

function validaEMAIL($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validaAlies($alies)
{
    $pattern = "/^[A-Za-zñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ, ]+$/";
    return preg_match($pattern, $alies);
}

function validaPasswd($passwd)
{
    return strlen($passwd) >= 8;
}

?>
