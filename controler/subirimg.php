<?php

session_start();

require("conection.php");

if($_SERVER["REQUEST_METHOD"]== "POST"){

    $correo = $_POST["email"];
    $constraseña = $_POST["pasword"];
    $phone = $_POST["phone"];
    $bio = $_POST["bio"];
    $nombre = $_POST["name"];
    $id = $_SESSION["users"]["id"];

    $hash = password_hash($constraseña,PASSWORD_DEFAULT);
    // PREPARO EL QUERY

    $query= "UPDATE users SET nombre='$nombre', email='$correo', pasword='$hash', bio='$bio', phone='$phone' WHERE id=$id";
    
    $resultado =$mysqli->query($query);
    
    if(($_FILES["img"]["tmp_name"])!= ""){
        
        $imagen = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));

        $query= "UPDATE users SET image='$imagen' WHERE id=$id";
        
        $resultado =$mysqli->query($query);
        if ($resultado) {
            $_SESSION["users"]["image"] = $imagen;
        } else {
            echo "Error al actualizar los datos en la base de datos.";
        }

    }

    if ($resultado) {
        $_SESSION["users"]["email"] = $correo;
        $_SESSION["users"]["phone"] = $phone;
        $_SESSION["users"]["bio"] = $bio;
        $_SESSION["users"]["nombre"] = $nombre;

    } else {
        echo "Error al actualizar los datos en la base de datos.";
    }

   
}

//cierra la conexion
$mysqli->close();
header("Location: perfil.php");

?>