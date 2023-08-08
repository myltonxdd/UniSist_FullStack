<?php

session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){

    extract($_POST);

    require("conection.php");

    $hash = password_hash($pasword,PASSWORD_DEFAULT);

    if ($id_rol==2) {
        $query= "UPDATE users SET nombre='$nombre', apellido='$apellido', email='$email', pasword='$hash', direccion='$direction', cumpleaños='$date', id_rol='$id_rol'  WHERE email=$email";

        $resultado =$mysqli->query($query);

    }
    elseif($id_rol==3){
        $query= "UPDATE users SET dni='$dni', nombre='$nombre', apellido='$apellido', email='$email', pasword='$hash', direccion='$direction', cumpleaños='$date', id_rol='$id_rol'  WHERE email=$email";

        $resultado =$mysqli->query($query);

    }

    
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