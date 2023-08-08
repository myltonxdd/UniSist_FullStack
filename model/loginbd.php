<?php
//VERIFICAR EL METODO DEL FORMULARIO
if(($_SERVER["REQUEST_METHOD"])== "POST"){
    $email=$_POST["email"];
    $pass = $_POST["pasword"];

    require("conection.php");
    $query = "SELECT * FROM users WHERE email = '$email'";

    $resultado = $mysqli->query($query);
    $mysqli->close();
    $numFilas = $resultado->num_rows;


    session_start();
    if($numFilas==1){
        $datos=$resultado->fetch_assoc();
        $resultadoPass = password_verify($pass, $datos["pasword"]);
        if($resultadoPass){
            if ($datos["id_rol"] == 1) {
                $_SESSION["admn"]=$datos;
                //redirecionar a los archivos php
                header("Location: ../view/admin_dash.php");
            }
            elseif($datos["id_rol"] == 2){
                $_SESSION["master"]=$datos;
                //redirecionar a los archivos php
                header("Location: ../view/maestro_dash.php");
            }
            elseif($datos["id_rol"] == 3){
                $_SESSION["stude"]=$datos;
                //redirecionar a los archivos php
                header("Location: ../view/alumno_dash.php");
            }
        }
        else{
            $_SESSION["error_correo"]="No existe la cuenta";
            header("Location: ../index.php");
        }
    }
    else{
        $_SESSION["error_correo"]="No existe la cuenta";
        header("Location: ../index.php");
    }
}