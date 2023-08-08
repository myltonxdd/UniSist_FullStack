<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    extract($_POST);
    
    require("conection.php");

    
    $query="INSERT INTO maestro_materia(maestro_id, materia_id) VALUES('$maestro', '$materia')";

    try {
        $resultado = $mysqli->query($query);
                        
        echo "Maestro materia registrado registrado";
        header("Location: ../view/admin_clases.php");
        
    } catch (mysqli_sql_exception $e) {
        
        
        echo "Error: " - $e->getMessage();

        header("Location: ../view/admin_clases.php");
        
    }

};
?>
