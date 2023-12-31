<?php

 session_start();
    require("../model/conection.php");

    if(!isset($_SESSION["master"])){
        echo "No estas autorizado";
        require("../index.php");
        die();
    }

    $id = $_SESSION["master"]["id"];
    $nombre = $_SESSION["master"]["nombre"];
    $query = "SELECT * FROM maestro_materia WHERE maestro_id=$id";
    $resultado = $mysqli->query($query);
    $fila = $resultado->fetch_assoc();
    $materiaid = $fila['materia_id'];
    
    $query2 = "SELECT * FROM alumno_materia WHERE materia_id=$materiaid";
    $resultado2 = $mysqli->query($query2);


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
    <div class="flex flex-row bg-[#f5f6fa] h-screen ">
        <div id="miElemento2" class="bg-[#353a40] h-full flex flex-col text-[#afb1b7] w-60 gap-2 shadow-2xl">
            <div class="flex flex-raw pt-2 gap-3 justify-center items-center">
                <img src="../recursos/assets/logo.jpg" alt="" class="rounded-full h-8 w-8">
                <p>Universidad</p>
            </div>
            <hr class=" border-[#afb1b7]">
            <div class="flex flex-col px-3">
                <h2 class="gap-2 font-semibold">Maestro</h2>
                <div class="text-sm"><?= $nombre ?> </div>
            </div>
            <hr class=" border-[#afb1b7]">
            <div class="flex flex-col px-2 gap-2">
                <h2 class="text-sm font-semibold pl-6">MENU MAESTROS</h2>
                <a href="./maestro_calf.php" class="flex flex-row gap-1 text-sm">
                    <img src="../recursos/icons/birrete.svg" alt="">
                    <p>Alumnos</p>
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
                <div id="miBoton" class="flex flex-row gap-3 cursor-pointer ">
                    <div class="flex-row items-center hidden md:flex ">
                        <div class="font-medium text-sm"><?= $nombre ?></div>
                        <img src="../recursos/icons/flechIzq.svg" alt="">
                    </div>
                </div>
                <div id="miElemento" class="flex flex-col bg-white fixed right-1 top-11 gap-3 rounded-xl drop-shadow-lg border p-3 w-36 hidden">
                    <a href="./maestro_editPerfil.php" class="flex flex-row gap-2">
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
            <div class="flex flex-row items-center justify-between w-full px-5 py-3">
                <h2 class="text-2xl">Alumnos de la Clase de ...</h2>
                <div class="flex flex-row items-center text-sm">
                    <a href="./maestro_dash.php">Home</a>
                    <p>/</p>
                    <div>Perfil</div>
                </div>
            </div>
            <div class="flex flex-col md:w-3/4 md:border md:rounded-lg md:m-3 bg-white items-center">

                <div class="p-3 text-[#828282]">
                    <div class="text-base font-medium">Alumnos de la Clase de ...</div>
                </div>
                
                <!-- component -->
                <hr class=" border-[#afb1b7] w-full">
                <section class="container px-4 mx-auto">
                    <div class="mt-6 md:flex md:items-center md:justify-between">
                        <div class="inline-flex bg-[#6c747e] border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                            <button class="px-3 py-1 text-xs font-medium text-white transition-colors duration-200 hover:bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300 hover:text-gray-600">
                                Copy
                            </button>

                            <button class="px-3 py-1 text-xs font-medium text-white transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100 hover:text-gray-600">
                                Excel
                            </button>

                            <button class="px-3 py-1 text-xs font-medium text-white transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100 hover:text-gray-600">
                                PDF
                            </button>

                            <button class="flex group relative px-3 py-1 text-xs justify-center items-center font-medium text-white transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:text-gray-600 hover:bg-gray-100">
                                <p>Column Visivility</p>
                                <img src="../recursos/icons/flechIzq.svg" alt="">
                                <div class="absolute hidden top-full min-w-full w-max shadow-md mt-1 rounded group-focus:block">
                                    <ul class="text-left rounded-lg border bg-white text-gray-600">
                                        <li class="px-4 py-1 border-b hover:bg-gray-100">Hola </li>
                                        <li class="px-4 py-1 border-b hover:bg-gray-100">Como</li>
                                        <li class="px-4 py-1 hover:bg-gray-100">Estas</li>
                                    </ul>
                                </div>
                            </button>


                        </div>

                        <div class="relative flex items-center mt-4 md:mt-0">
                            <span class="absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>

                            <input type="text" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>
                    </div>

                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <button class="flex items-center gap-x-3 focus:outline-none">
                                                        <span>#</span>

                                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                        </svg>
                                                    </button>
                                                </th>

                                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Nombre del alumno
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Mensajes
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Acciones
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                            <?php
                                            $i = 1;
                                            while ($fila = $resultado2->fetch_assoc()) {
                                                echo "
                                                <tr>
                                                    <td class='px-4 py-4 text-sm font-medium whitespace-nowrap'>
                                                        <div>
                                                            <p class='text-sm font-normal text-gray-600 dark:text-gray-400'>".$i."</p>
                                                        </div>
                                                    </td>
                                                    <td class='px-12 py-4 text-sm font-medium whitespace-nowrap'>
                                                    <div>
                                                            <p class='text-sm font-normal text-gray-600 dark:text-gray-400'>".$fila['alumno_id']."</p>
                                                        </div>
                                                    </td>
                                                    <td class='px-4 py-4 text-sm whitespace-nowrap'>
                                                        <div>
                                                            <p class='text-gray-500 dark:text-gray-400'>".$fila['nota']."</p>
                                                        </div>
                                                    </td>
                                                    <td class='px-4 py-4 text-sm whitespace-nowrap'>
                                                        <div>
                                                            <p class='bg-[#1c9fbc] text-white p-1'>". ($fila['nota'] == null)?'No hay mensajes':($fila['nota']) ."</p>
                                                        </div>
                                                    </td>
                                                    <td class='px-4 py-4 text-sm whitespace-nowrap flex gap-2'>
                                                        <img class='editAlumn cursor-pointer' id='' src='../recursos/icons/addfile.svg' alt=''>
                                                        <img class=' cursor-pointer'  src='../recursos/icons/sendfile.svg' alt=''>
                                                    </td>
                                                </tr>
                                                ";
                                                $i++;
                                            } 
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 sm:flex sm:items-center sm:justify-between sm:mb-2 ">
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Showing <span class="font-medium text-gray-700 dark:text-gray-100">1 of 6</span> of 6 entries
                        </div>

                        <div class="flex items-center mt-4 sm:mt-0">
                            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                <span>
                                    previous
                                </span>
                            </a>

                            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                <span>
                                    1
                                </span>
                            </a>

                            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                <span>
                                    Next
                                </span>

                            </a>
                        </div>
                    </div>
                </section>

            </div>

        </div>

    </div>


</body>

</html>