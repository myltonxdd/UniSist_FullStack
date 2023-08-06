<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "final_proyect");
    
} catch (mysqli_sql_exception $e) {
    echo "Error:". $e->getMessage();
}