<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    extract($_POST);
    
    require("conection.php");

    $hash = password_hash($pasword,PASSWORD_DEFAULT);

    if ($id_rol==2) {
        $query="INSERT INTO users(nombre, apellido, email, direccion, pasword, cumpleaños,id_rol) VALUES('$nombre', '$apellido', '$email', '$direction', '$hash', '$date', '$id_rol')";

        try {
            $resultado = $mysqli->query($query);
                          
            echo "Usuario registrado";
            if($resultado){
                $queryid = "SELECT * FROM users WHERE email='$email'";
                $resultadoid = $mysqli->query($queryid);
                $fila = $resultadoid->fetch_assoc();
                $filaid = $fila['id'];

                echo "registrado maestro";        
                $query="INSERT INTO maestro_materia(maestro_id, materia_id) VALUES('$filaid','$materia')";
                $resultado = $mysqli->query($query);
                header("Location: ../view/admin_maestr.php");
                        
            }
        } catch (mysqli_sql_exception $e) {
            if($mysqli->errno === 1062){
                $_SESSION["error_message"]="El correo ya existe";
                header("Location: ../view/admin_maestr.php");
            }
            else{
                echo "Error: " - $e->getMessage();
            }
        }
    
    }
    elseif($id_rol==3){
        $query="INSERT INTO users(dni, nombre, apellido, email, direccion, pasword, cumpleaños,id_rol) VALUES('$dni','$nombre', '$apellido', '$email', '$direction', '$hash', '$date', '$id_rol')";

        try {
            $resultado = $mysqli->query($query);
     
            echo "Usuario registrado";
            if($resultado){

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
    
    

   
    
};
?>
