<?php
session_start();
if(!isset($_SESSION['signedIn']) || !($_SESSION['signedIn'] === true)) {
    echo '
        You are not authorised to access this page.
    ';
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link href="assets/js/usrAccountMod.js"/>

    <?php if (isset($_SESSION['username'])) {
        echo "<title>" . htmlspecialchars($_SESSION['username']) . "'s Account</title>
        ";
    } else { ?>
        <title>Account Information</title>
        <?php
    }
    ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="bootstrap-override">

<?php
include "assets/php/header.php";
?>

<br>

<main>

<div class="container h-100">

<!--grid row-->

    <div class="row justify-content-center d-flex align-items-center h-100 ">

<!--grid column-->

        <div class="col-lg-12 col-xl-11">
            <div class="card">
                <div class="card-body p-md-3">

<!--grid row-->

                    <div class="row justify-content-center">

<!--grid column-->

                        <div class="col-md-10 order-2 col-lg-6 order-lg-1">

                            <h1 class="text-center"><?php echo htmlspecialchars($_SESSION['username']);?> Account Info</h1>

                                <!--grid row-->

                                <div class="flex-row d-flex align-items-center mb-4 justify-content-center">
                                    <h4> Change account information</h4>
                                </div>

                            <!--grid row-->

                            <div class="password flex-row d-flex align-items-center mb-4 justify-content-center" id="usrnameChange emailChange">
                                <button class="password btn btn-light" type="button" onclick="passResetForm();">Change Password</button>
                            </div>

                            <!--grid row-->

                                <div class="username flex-row d-flex align-items-center mb-4 justify-content-center" id="passwdChange emailChange">
                                    <button class="username btn btn-light" type="button" onclick="usrnameChangeForm();">Change Username</button>
                                </div>

                                <!--last grid row-->

                                <div class="email flex-row d-flex align-items-center mb-4 justify-content-center" id="passwdChange usrnameChange">
                                    <button class="email btn btn-light" type="button" onclick="emailChangeForm();">Change Email Address</button>
                                </div>
                        </div>
                        <div class="col-md-10 order-2 col-lg-6 order-lg-1 text-center align-items-center justify-content-center align-self-center" id="change">
                            <a href="assets/php/remove-account.php" class="bg-danger border-danger btn btn-primary">Delete account</a>
                        </div>
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
<script src="assets/js/usrAccountMod.js"></script>

    </html>
<?php
}
?>
