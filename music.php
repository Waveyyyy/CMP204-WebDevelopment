<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

    <title>Music of MF DOOM</title>
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

        <div class="col-lg-12 col-xl-11">
            <div class="card">
                <div class="card-body p-md-3">
                    <div class="row">
                        <div class="col-md-5 order-2 justify-content-center align-items-center ms-4">
                            <!--All album art from https://musicbrainz.org/ -->
                            <img src="" alt="" class="d-block img-fluid" id="carouselImg"/>
                            <div class="row mt-4 ms-3" >
                                <div class="col-3 col-sm-3">
                                    <button type="button" onclick="move(-1);" class="btn btn-light float-start"><<</button>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <button type="button" onclick="move(1);" class="btn btn-light float-end">>></button>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3 mx-5 order-2 align-items-center justify-content-center">
                            <iframe src="" width="100%" height="380" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" id="spotify"></iframe>
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
<script src="assets/js/albumDisplay.js"></script>

</html>