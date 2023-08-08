<?php

session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){

    extract($_POST);

    require("conection.php");

    $hash = password_hash($pasword,PASSWORD_DEFAULT);

    if ($id_rol==2) {
        $query= "UPDATE users SET nombre='$nombre', apellido='$apellido', pasword='$hash', direccion='$direction', cumpleaños='$date'  WHERE email='$email'";

        $resultado =$mysqli->query($query);

        if ($resultado) {
            header("Location: ../view/maestro_dash.php");
        }

    }
    elseif($id_rol==3){
        
        $query= "UPDATE users SET dni='$dni', nombre='$nombre', apellido='$apellido', pasword='$hash', direccion='$direction', cumpleaños='$date'  WHERE email='$email'";
        
        try {
            
            $resultado =$mysqli->query($query);
            
            if ($resultado) {
                
                header("Location: ../view/admin_alumn.php");
            }

        } catch (mysqli_sql_exception $e) {
            if($mysqli->errno === 1062){
                
                $_SESSION["error_message"]="El correo ya existe";
                header("Location: ../view/admin_alumn.php");
            }
            else{
                echo "Error: " - $e->getMessage();
            }
        }

        

    }

   
}

//cierra la conexion
$mysqli->close();


?>