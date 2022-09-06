<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

    <title>About - MF DOOM</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="bootstrap-override">
<?php
session_start();
include "assets/php/header.php";
?>

<br>

<main>
    <div class="container h-100">
        <div class="row justify-content-center d-flex align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card">
                    <div class="card-body p-md-3">

                        <div class="row justify-content-center">

                            <div id="indicator" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#indicator" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#indicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#indicator" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <!-- image from https://www.revolt.tv/article/2020-12-31/62729/mf-doom-dies-at-age-49/ -->
                                        <img id="carousel" src="assets/img/ALLCAPS.jpg" class="d-block w-100" alt="MF DOOM in a new york tank top with a cap">
                                    </div>
                                    <div class="carousel-item">
                                        <!-- image from https://arthurmag.com/2009/09/16/mf-dooms-villainous-mac-cheeze/ -->
                                        <img id="carousel" src="assets/img/villainousmacncheeze.jpg" class="d-block w-100" alt="MF DOOM holding mac and cheese looking into the camera">
                                    </div>
                                    <div class="carousel-item">
                                        <!-- image from https://me.me/i/iconic-photo-of-mf-doom-and-kanye-west-aa660d6b82fd49dc98ae59229ce5cdfb -->
                                        <img id="carousel" src="assets/img/MFandYE.png" class="d-block w-100" alt="MF DOOM standing with kanye west">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#indicator" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#indicator" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center text-center">
                            <h2 class="m-2">About MF DOOM</h2>

                            <p id="about-text" class="m-3"></p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<br>

<?php
include "assets/php/footer.php";
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/displayAbout.js"></script>


</html>