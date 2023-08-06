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
            $_SESSION["users"]=$datos;
            //redirecionar a los archivos php
            header("Location: perfil.php");
        }
        else{
            $_SESSION["error_login"]="No existe la cuenta";
            header("Location: index.php");
        }
    }
    else{
        
        $_SESSION["error_login"]="No existe la cuenta";
        header("Location: index.php");
    }
}