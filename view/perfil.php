<?php
require("conection.php");
session_start();

if (!isset($_SESSION["users"])) {
    echo "No estas autorizado";
    require("index.php");
    die();
}

$email = $_SESSION["users"]["email"];
$phone = $_SESSION["users"]["phone"];
$bio = $_SESSION["users"]["bio"];
$nombre = $_SESSION["users"]["nombre"];
$id = $_SESSION["users"]["id"];
$datosImg = null;

$query = "SELECT * FROM users WHERE id=$id";
$resultado = $mysqli->query($query);

while ($fila = $resultado->fetch_assoc()) {
    if ($fila["image"] != "") {
        $datosImg = base64_encode($fila["image"]);
    }
}
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Personal Info</title>
    <script src="./cambio.js" defer></script>
</head>

<body>
    <div class="flex flex-col px-6 pt-6 gap-3">
        <div class="flex flex-raw justify-between items-center bg-white">
            <div id="miBoton">
                <div class="fixed top-8">
                    <img src="./recursos/devcha.svg" alt="">
                </div>
                <div class="flex flex-row gap-3 items-center fixed top-6 right-8 ">
                    <?php echo $datosImg != null ? '<img src="data:image/jpg;base64,' . $datosImg . '" alt="" class="object-cover w-12 h-13">' : '<img src="./recursos/fotovacia.jpg" alt="" class="object-cover w-12 h-13">'; ?>              
                    <div class="flex-row hidden md:flex ">
                        <div class="font-bold text-sm"><?= $nombre ?> </div>
                        <img src="./recursos/flecha.svg" alt="">
                    </div>
                </div>
            </div>
            <div id="miElemento" class="flex flex-col bg-white fixed right-8 top-20 gap-3 rounded-xl border p-3 w-36">
                <a href="./perfil.php" class="flex flex-row gap-2">
                    <img src="./recursos/myprofile.svg" alt="">
                    <div class="font-medium text-sm">My Profile</div>
                </a>
                <a href="./groupchat.php" class="flex flex-row gap-2">
                    <img src="./recursos/groupchat.svg" alt="">
                    <div class="font-medium text-sm">Group Chat</div>
                </a>
                <hr>
                <a href="./logout.php" class="flex flex-row gap-2">
                    <img src="./recursos/logout.svg" alt="">
                    <div class="text-red-600 font-medium text-sm">Logout</div>
                </a>
            </div>
        </div>
        
        <div class="flex flex-col w-full justify-center items-center pt-3 ">
            <div class="flex flex-col gap-6 md:w-4/6 md:border md:rounded-lg md:p-6">
                <div class="flex flex-col gap-1 items-center pt-5">
                    <div class="text-2xl font-normal">Personal Info</div>
                    <div class="text-[#828282] text-sm font-medium">Basic Info, like your name and photo</div>
                </div>
                <div class="flex flex-raw w-full justify-between items-center">
                    <div class="flex flex-col w-3/5">
                        <div class="text-2xl font-normal">Profile</div>
                        <div class="text-[#828282] text-sm font-medium">Some info may be visible to other people</div>
                    </div>
                    <a href="./editPerfil.php">
                        <div class="border rounded-lg w-24 flex justify-center items-center text-[#828282] h-9">Edit</div>
                    </a>
                </div>
                <div class="flex flex-col gap-4 pt-3">
                    <div class="flex flex-raw justify-between w-full">
                        <div class="flex  items-center text-sm text-[#BDBDBD] font-medium w-1/3">PHOTO</div>
                        <div class="flex w-2/3 justify-end ">
                            <?php echo $datosImg != null ? '<img src="data:image/jpg;base64,' . $datosImg . '" alt="" class="object-cover w-16">' : '<img src="./recursos/fotovacia.jpg" alt="" class="object-cover w-16">'; ?> 
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-raw justify-between w-full">
                        <div class="flex  items-center text-sm text-[#BDBDBD] font-medium w-1/3">NAME</div>
                        <div> <?= $nombre ?></div>
                    </div>
                    <hr>
                    <div class="flex flex-raw justify-between w-full">
                        <div class="flex  items-center text-sm text-[#BDBDBD] font-medium w-1/3">BIO</div>
                        <div> <?= $bio ?></div>
                    </div>
                    <hr>
                    <div class="flex flex-raw justify-between w-full">
                        <div class="flex  items-center text-sm text-[#BDBDBD] font-medium w-1/3">EMAIL</div>
                        <div> <?= $email ?></div>
                    </div>
                    <hr>
                    <div class="flex flex-raw justify-between w-full">
                        <div class="flex  items-center text-sm text-[#BDBDBD] font-medium w-1/3">PASSWORD</div>
                        <div>**********</div>
                    </div>
                <div>
            </div>
            
        </div>
        

    </div>
    <div class="flex flex-row justify-between font-normal text-sm w-full text-[#BDBDBD] py-4 md:w-4/6">
        <div>Milton Procel</div>
        <div>devchallenges.io</div>
    </div>



</body>

</html>