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
                <h2 class="text-2xl">Calificaciones y mensajes de tus clases</h2>
                <div class="flex flex-row items-center text-sm">
                    <a href="">Home</a>
                    <p>/</p>
                    <a href="">Perfil</a>
                </div>
            </div>
            <div class="w-full flex flex-row">

                <div class="flex flex-col py-3 w-6/12 md:border md:rounded-lg md:m-3 bg-white items-center">
                    <div class="px-3 text-[#828282] w-full text-start">
                        <div class="text-base font-medium">Tus Materias Inscritas</div>
                    </div>
                    <!-- component -->
                    <section class="container mx-auto">

                        <hr class="border-[#afb1b7] mt-2">

                        <div class="flex flex-col mt-6 px-4">
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
                                                        Nombre de Clase
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                        <div>
                                                            <h2 class="font-medium text-gray-800 dark:text-white ">Catalog</h2>
                                                            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">catalogapp.io</p>
                                                        </div>
                                                    </td>
                                                    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                        <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                                            Customer
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                        <div>
                                                            <h2 class="font-medium text-gray-800 dark:text-white ">Quotient</h2>
                                                            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">quotient.co</p>
                                                        </div>
                                                    </td>
                                                    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                        <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                                            Customer
                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>

                <div class="flex flex-col py-3 w-5/12 md:border md:rounded-lg md:m-3 bg-white items-center">

                    <div class="px-3 text-[#828282] w-full text-start">
                        <div class="text-base font-medium">Materias para inscribir</div>
                    </div>

                    <!-- component -->
                    <section class="container mx-auto">

                        <hr class="border-[#afb1b7] mt-2">

                        <form class="flex flex-col px-4" method="post" action="../controler/alumnAgrMat.php">
                            <label for="country" class="py-4 text-sm font-semibold">Seleciona la(s) Clase(s) usa la tecla Ctrl</label> 

                            <div class="p-2 border border-gray-200 md:rounded-lg flex flex-col">
                                <label>
                                    <input type="checkbox" name="selectedCountries[]" value="USA" />
                                    USA
                                </label>
                                <label>
                                    <input type="checkbox" name="selectedCountries[]" value="Canada" />
                                    Canada
                                </label>
                                <label>
                                    <input type="checkbox" name="selectedCountries[]" value="Mexico" />
                                    Mexico
                                </label>


                            </div>
                    
                            <div>
                                <button type="submit" class="m-2 bg-blue-600 rounded-lg text-white h-8 w-24 mb-2">Inscribir</button>
                            </div>

                        </form>

                    </section>

                </div>

            </div>

        </div>

    </div>


</body>

</html>