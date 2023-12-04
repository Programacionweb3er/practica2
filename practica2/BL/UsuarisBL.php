<?php
require_once('DL/DatabaseDL.php');
require_once('helpers/validation.php');

class UsuarisBL
{
    public function altaUsuari($nom, $cognoms, $email, $alies, $passwd)
    {
        $nom = sanitizeNOM($nom);
        $cognoms = sanitizeCOGNOMS($cognoms);
        $email = sanitizeEMAIL($email);
        $passwd = sanitizePASSWD($passwd);
        $alies = sanitizeALIES($alies);

        if (validaNOM($nom) && validaCOGNOMS($cognoms) && validaEMAIL($email) && validaAlies($alies) && validaPasswd($passwd)) {
            $db = new Database();
            $hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);

            if ($db->insertUser($nom, $cognoms, $email, $alies, $hashedPasswd)) {
                return 0;
            } else {
                $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error al insertar en la base de datos";
                return 2;
            }
        } else {
            $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en la validación de los datos";
            return 1;
        }
    }
    public function getUserByUsername($username)
    {
        $db = new Database();
        
        $result = $db->getByName($username);

        // Suponiendo que se espera un solo usuario con el mismo nombre de usuario
        return ($result->num_rows > 0) ? $result->fetch_assoc() : null;
    }
    public function llistaUsuaris()
    {
        $db = new Database();
        return $db->getAll();
    }


}
?>
