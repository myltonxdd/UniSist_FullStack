<?php

session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){

    extract($_POST);

    require("conection.php");

    if ($id_rol==2) {
        $query= "UPDATE users SET nombre='$nombre', apellido='$apellido', direccion='$direction', cumpleaños='$date'  WHERE email='$email'";

        $resultado =$mysqli->query($query);

        if($resultado){
            $queryid = "SELECT * FROM users WHERE email='$email'";
            $resultadoid = $mysqli->query($queryid);
            $fila = $resultadoid->fetch_assoc();
            $filaid = $fila['id'];

            echo "registrado maestro";        
            $query="UPDATE maestro_materia SET maestro_id='$filaid', materia_id='$materia'";
            $resultado = $mysqli->query($query);
            header("Location: ../view/admin_maestr.php");
                    
        }

    }
    elseif($id_rol==3){
        
        $query= "UPDATE users SET dni='$dni', nombre='$nombre', apellido='$apellido', direccion='$direction', cumpleaños='$date'  WHERE email='$email'";
        var_dump($query);

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