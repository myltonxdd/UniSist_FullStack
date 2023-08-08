<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    extract($_POST);
    
    require("conection.php");

    $id= $_SESSION["stude"]["id"];
    $query2 = "SELECT maestro_id FROM maestro_materia";
    $resultado2 = $mysqli->query($query2);
    $maestro = $resultado2->fetch_assoc();
    $id_maestro = $maestro['maestro_id'];
    

    $query="INSERT INTO alumno_materia(alumno_id, maestro_id, materia_id) VALUES('$id','$id_maestro', '$id_materia')";

    try {
        $resultado = $mysqli->query($query);
                        
        echo "Maestro materia registrado registrado";
        header("Location: ../view/alumno_EsqueCla.php");
        
    } catch (mysqli_sql_exception $e) {
        
        
        echo "Error: " . $e->getMessage();

        
        
    }

};
?>
