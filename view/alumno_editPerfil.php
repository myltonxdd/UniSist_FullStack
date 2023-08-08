<?php

 session_start();
    require("../model/conection.php");

    if(!isset($_SESSION["stude"])){
        echo "No estas autorizado";
        require("index.php");
        die();
    }

    $id = $_SESSION["stude"]["id"];
    $nombre = $_SESSION["stude"]["nombre"];
    $correo = $_SESSION["stude"]["email"];

    $mysqli->close();
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
    <div class="flex flex-row bg-[#f5f6fa] h-screen">
        <div id="miElemento2" class="bg-[#353a40] h-full flex flex-col text-[#afb1b7] w-60 gap-2 shadow-2xl">
            <div class="flex flex-raw pt-2 gap-3 justify-center items-center">
                <img src="../recursos/assets/logo.jpg" alt="" class="rounded-full h-8 w-8">
                <p>Universidad</p>
            </div>
            <hr class=" border-[#afb1b7]">
            <div class="flex flex-col px-3 gap-2">
                <h2>Alumno</h2>
                <div class="text-sm"><?= $nombre ?> </div>
            </div>
            <hr class=" border-[#afb1b7]">
            <div class="flex flex-col px-2 gap-2">
                <h2 class="text-sm font-semibold pl-6">MENU ALUMNOS</h2>
                <a href="./alumno_calf.php" class="flex flex-row gap-1 text-sm">
                    <img src="../recursos/icons/task.svg" alt="">
                    <p>Ver Calificaciones</p>
                </a>
                <a href="./alumno_EsqueCla.php" class="flex flex-row gap-1 text-sm">
                    <img src="../recursos/icons/easel.svg" alt="">
                    <p>Administra tus clases</p>
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full items-center">
        <div class="flex flex-row w-full justify-between bg-white border-b-2 p-2 text-[#afb1b7]">
                <div id="miBoton2" class="flex flex-row items-center gap-3 cursor-pointer">
                    <div>
                        <img src="../recursos/icons/menulineas.svg" alt="">
                    </div>
                    <div class="font-medium text-sm">Home</div>
                </div>
                <div id="miBoton" class="flex flex-row gap-3 ">
                    <div class="flex-row items-center hidden md:flex ">
                        <div class="font-medium text-sm"><?= $nombre ?></div>
                        <img src="../recursos/icons/flechIzq.svg" alt="">
                    </div>
                </div>
                <div id="miElemento" class="flex flex-col bg-white fixed right-1 top-11 gap-3 rounded-xl drop-shadow-lg border p-3 w-36 hidden">
                    <div id="miElemento" class="flex flex-col bg-white fixed right-1 top-11 gap-3 rounded-xl drop-shadow-lg border p-3 w-36 hidden">
                        <a href="./admin_editPerfil.php" class="flex flex-row gap-2">
                            <img src="../recursos/icons/myprofile.svg" alt="">
                            <div class="font-medium text-sm">Perfil</div>
                        </a>
                        <hr>
                        <a href="../controler/logout.php" class="flex flex-row gap-2">
                            <img src="../recursos/icons/logout.svg" alt="">
                            <div class="text-red-600 font-medium text-sm">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center justify-between w-full px-5 py-2">
                <h2 class="text-2xl">Editar datos de perfil</h2>
                <div class="flex flex-row items-center text-sm">
                    <a href="">Home</a>
                    <p>/</p>
                    <a href="">Perfil</a>
                </div>
            </div>
            <div class="flex flex-col md:w-11/12 md:border md:rounded-lg md:mt-2 bg-white">
                
                <div class="p-2">
                    <div class="text-[#828282] text-base font-medium">Informacion de usuario</div>
                </div>
                <hr class=" border-[#afb1b7]">
                <form action="../model/edit_MastAlum.php" method="post" enctype="multipart/form-data" class="px-6 flex flex-col gap-3 mt-2 items-end">

                    <div class="flex flex-col w-full">
                        <label for="dni" class="font-semibold">Matricula</label>
                        <input type="text" id="dni" readonly name="dni" placeholder="Enter your password..." class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="email" class="font-semibold">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email..." value="<?= $correo ?>" class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>
                    
                    <div class="flex flex-col w-full">
                        <label for="pasword" class="font-semibold">Password</label>
                        <input type="password" id="pasword" name="pasword" placeholder="Enter your password..." class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="nombre" class="font-semibold">Nombre(s)</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Enter your name..." class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>
                    
                    <div class="flex flex-col w-full">
                        <label for="apellido" class="font-semibold">Apellido(s)</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Enter your lastname..." class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="direction" class="font-semibold">Dirección</label>
                        <input type="text" id="direction" name="direction" placeholder="Enter your adress..." class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="date" class="font-semibold">Fecha de Nacimiento</label>
                        <input type="date" id="date" name="date" placeholder="03/04/2022" class="border border-stone-400 rounded-lg h-8 p-1" />
                    </div>

                    <input type='text' id='id_rol' name='id_rol' class='hidden' value='3' />

                    <input type="submit" value="Save" class="bg-blue-600 rounded-lg text-white h-8 w-24 mb-2" />
                </form>
            </div>

        </div>

    </div>


</body>

</html>