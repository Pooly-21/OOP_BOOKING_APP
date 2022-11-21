<?php
// require 'function.php';

// $select = new Select();

// if(!empty($_SESSION["id"])){
//   $user = $select->selectUserById($_SESSION["id"]);
// }
// else{
//   header("Location: login.php");
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


        
    <title>HOTEL`PLUGTALK</title>

</head>
<body>
    <!-- Website has Home or Landing Page, About page, Lookbook page, Contact page and Shop -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 text-secondary" href="./index.php">HOTEL ` PLUGZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2 text-danger" aria-current="page" href="Hotel_List.php">VIEW HOTELZ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-danger" href="Confirmation.php">CONFIRMATIONZ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-info" href="profile.php">PROFILE</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-secondary" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-warning" href="registration.php">SIGN UP</a>
                </li>
                </li>
            </ul>
            <div class="d-flex">
               <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --> 
                <a href="login.php"><button class="btn btn-outline-success" type="submit">login</button></a>
            </div>
            </div>
        </div>
        </nav>

    <div class="container-fluid">
        <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <img src="./img/room_1.jpg" />
            </div>
            <div class="swiper-slide">
            <img src="./img/room_2.jpg" />
            </div>
            <div class="swiper-slide">
            <img src="./img/room_3.jpg" />
            </div>
            <div class="swiper-slide">
            <img src="./img/room_4.jpg" />
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/script.js" type="module" defer></script>
</body>
</html>