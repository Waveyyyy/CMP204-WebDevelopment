<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

    <title>Homepage - MF DOOM</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="bootstrap-override">

<?php
session_start();
include "assets/php/header.php";
?>

<br>

<main>

<!--grid container-->

    <div class="container" id="featured-albums">
        <h2 class="text-center">Featured Albums</h2>

<!--grid row-->

        <div class="row">
<!-- <img src="data:image/jpg;base64," alt="" >-->

<!--grid column-->

            <div class="col-sm-4 col-xs-12 col-md-4 mb-4" >

                <div class="card" id="featured">
                    <a class="card-img" href="#">
                        <img id="album-art1" src="" alt="" />
                    </a>
                    <div class="card-body">
                        <h3 class="card-title" id="album-title1"></h3>
                        <p class="card-text" id="short-desc1">
                        </p>
                        <a class="btn btn-primary" href="music.php" onclick="album(1);">View Tracklist</a>
                    </div>
                </div>

            </div>

<!--grid column-->

            <div class="col-sm-4 col-xs-12 col-md-4 mb-4" >

                <div class="card">
                    <a class="card-img" href="#">
                        <img id="album-art2" src="" alt="" />
                    </a>
                    <div class="card-body">
                        <h3 class="card-title" id="album-title2"></h3>
                        <p class="card-text" id="short-desc2">
                        </p>
                        <a class="btn btn-primary" href="music.php" onclick="album(2);">View Tracklist</a>
                    </div>
                </div>

            </div>

<!--grid column-->

            <div class="col-sm-4 col-xs-12 col-md-4 mb-3" >

                <div class="card">
                    <a class="card-img" href="#">
                        <img id="album-art3" src="" alt="" />
                    </a>
                    <div class="card-body">
                        <h3 class="card-title" id="album-title3"></h3>
                        <p class="card-text" id="short-desc3">
                        </p>
                        <a class="btn btn-primary" href="music.php" onclick="album(3)">View Tracklist</a>
                    </div>
                </div>

            </div>

<!--last grid column-->

        </div>
    </div>

    <hr>

<!--full width container-->

    <div class="container-fluid">
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien porttitor, dapibus felis sed, sollicitudin metus. Vivamus ut accumsan est. Mauris justo quam, egestas eu vestibulum ut, vehicula sed velit. Vestibulum a mi consectetur, cursus diam non, tristique ante. Nullam purus nibh, dapibus sed faucibus a, dignissim nec nulla. Nam vitae magna et odio vulputate congue iaculis nec neque. Morbi imperdiet, mauris eget condimentum elementum, velit ante faucibus nibh, a pulvinar ex elit at dolor. Curabitur nec purus porttitor, congue libero a, sollicitudin sem. Cras sollicitudin ante vitae massa consectetur, a accumsan est scelerisque.
            In ac dui consectetur, egestas arcu sed, ultricies ipsum. Sed dictum dolor justo, sit amet pharetra diam eleifend eu. Integer convallis venenatis dui, non commodo eros aliquam a. Nam dapibus, turpis in cursus volutpat, tortor libero cursus augue, a sodales purus arcu eget odio...</p>
        <h4>
            <a href="about.php" class="btn btn-primary">Read More</a>
        </h4>
    </div>

    <hr>

</main>

<div id="cookie-popup" class="cookie-consent">
    <div class="disappear">
        <a id="close-popup">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>
    </div>
    <div class="popup-content">
        <b>This website makes use of cookies to store session information.</b>
        <a href="privacyPol.php">Privacy Policy</a>
    </div>
</div>


<br>

<?php
include "assets/php/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/cookieConsent.js"></script>
<script src="assets/js/featuredAlbums.js"></script>

</body>

</html>