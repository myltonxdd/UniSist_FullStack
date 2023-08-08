<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-[#fff5d2]">
    <div class="flex flex-col w-screen h-screen px-6 gap-5 items-center">
        <div class="md:w-[27rem] sm:px-8 sm:mt-4">
            <div class="flex flex-col">
                <div><img src="./recursos/assets/logo.jpg" alt=""></div>
            </div>
            <div class="bg-white p-3 flex flex-col items-center">
                <p class="text-[#828282]">Bienvenido Ingresa a tu cuenta</p>
                <form class="flex flex-col w-full gap-3 pt-5 sm:pt-3 items-end" action="./model/loginbd.php" method="post">
                    <?php if(isset($_SESSION["error_correo"])){
                    print("<p class='text-red-600 text-sm'>".$_SESSION["error_correo"]."</p>");
                    unset($_SESSION["error_correo"]);}?>
                    <div class="flex flex-raw border rounded-md h-11 focus-within:border-2 w-full px-2">
                        <input type="email" id="correo" name="email" placeholder="Email" class="border-none outline-none w-full" />
                        <img src="./recursos/icons/sobre.svg" alt="">
                    </div>

                    <div class="flex flex-raw border rounded-md h-11 focus-within:border-2 w-full px-2">
                        <input type="password" id="pasword" name="pasword" placeholder="Password" class="border-none outline-none w-full" />
                        <img src="./recursos/icons/candado.svg" alt="">
                    </div>
                    
                    <input type="submit" value="Ingresar" class="bg-blue-600 font-semibold text-lg rounded-md text-white mt-4 w-28 sm:mt-2 h-11 "/>
                </form>
            </div>
            
        </div>
       

    </div>
</body>
</html>