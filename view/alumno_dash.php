<?php

/*  session_start();
    require("conection.php");

    if(!isset($_SESSION["users"])){
        echo "No estas autorizado";
        require("index.php");
        die();
    }

    $id = $_SESSION["users"]["id"];
    $nombre = $_SESSION["users"]["nombre"];
    $query = "SELECT * FROM users WHERE id=$id";
    $resultado = $mysqli->query($query);
    $datosImg = null;

    while ($fila = $resultado->fetch_assoc()) {
        if ($fila["image"] != "") {
            $datosImg = base64_encode($fila["image"]);
        }
    }
    $mysqli->close(); */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Change info</title>
    <script src="./cambio.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-custom">
    <div class="flex flex-row bg-[#f5f6fa] h-screen ">

        <div id="miElemento2" class="bg-[#353a40] h-full flex flex-col text-[#afb1b7] w-60 gap-2 shadow-2xl">
            <div class="flex flex-raw pt-2 gap-3 justify-center items-center">
                <img src="../recursos/assets/logo.jpg" alt="" class="rounded-full h-8 w-8">
                <p>Universidad</p>
            </div>
            <hr class=" border-[#afb1b7]">
            <div class="flex flex-col px-3">
                <h2>Alumno</h2>
                <div class="font-bold text-sm"><!-- <?= $nombre ?> --> </div>
            </div>
            <hr class=" border-[#afb1b7]">
            <div class="flex flex-col px-2 gap-2">
                <h2 class="text-sm font-semibold pl-6">MENU ALUMNOS</h2>
                <a href="#" class="flex flex-row gap-1 text-sm">
                    <img src="../recursos/icons/task.svg" alt="">
                    <p>Ver Calificaciones</p>
                </a>
                <a href="" class="flex flex-row gap-1 text-sm">
                    <img src="../recursos/icons/easel.svg" alt="">
                    <p>Administra tus clases</p>
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full">
            <div class="flex flex-row w-full justify-between bg-white border-b-2 p-2 text-[#afb1b7]">
                <div id="miBoton2" class="flex flex-row items-center gap-3 cursor-pointer">
                    <div>
                        <img src="../recursos/icons/menulineas.svg" alt="">
                    </div>
                    <div class="font-medium text-sm">Home</div>
                </div>
                <div id="miBoton" class="flex flex-row gap-3 ">
                    <div class="flex-row items-center hidden md:flex ">
                        <div class="font-medium text-sm"><!-- <?= $nombre ?> -->Milton </div>
                        <img src="../recursos/icons/flechIzq.svg" alt="">
                    </div>
                </div>
                <div id="miElemento" class="flex flex-col bg-white fixed right-1 top-11 gap-3 rounded-xl drop-shadow-lg border p-3 w-36 hidden">
                    <a href="./perfil.php" class="flex flex-row gap-2">
                        <img src="../recursos/icons/myprofile.svg" alt="">
                        <div class="font-medium text-sm">Perfil</div>
                    </a>
                    <hr>
                    <a href="./logout.php" class="flex flex-row gap-2">
                        <img src="../recursos/icons/logout.svg" alt="">
                        <div class="text-red-600 font-medium text-sm">Logout</div>
                    </a>
                </div>
            </div>
            <div class="flex flex-row items-center justify-between w-full px-5 py-3">
                <h2 class="text-2xl">Dashboard</h2>
                <div class="flex flex-row items-center text-sm">
                    <a href="">Home</a>
                    <p>/</p>
                    <a href="">Perfil</a>
                </div>
            </div>
            <div class="flex flex-col md:w-3/4 md:border md:rounded-lg md:m-3    bg-white">

                <div class="p-3 text-[#828282]">
                    <div class="text-base font-medium">Bienvenido</div>
                    <p class=" text-sm">Seleciona la accion que quieras realizar en las pestañas del menu de la izquierda</p>
                </div>

            </div>

        </div>

    </div>


</body>

</html>