<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    
    require("conection.php");
    session_start();

    $hash = password_hash($pasword,PASSWORD_DEFAULT);

    $query="INSERT INTO users(email,pasword) VALUES('$email', '$hash')";

    

    try {
        $resultado = $mysqli->query($query);
        echo "Usuario registrado";
        if($resultado){
            /* $queryUsuario = "SELECT FROM users(email,pasword) VALUES('$email', '$hash')"; */
            $queryUsuario = "SELECT * FROM users WHERE email='$email' AND pasword='$hash'";

            $usuarioDB=$mysqli->query($queryUsuario);

            $_SESSION["users"] = $usuarioDB->fetch_assoc();
            header("Location: perfil.php");
        }
    } catch (mysqli_sql_exception $e) {
        if($mysqli->errno === 1062){
            
            $_SESSION["error_correo"]="El correo ya existe";
            header("Location: index.php");
        }
        else{
            echo "Error: " - $e->getMessage();
        }
    }

    
};
?>
