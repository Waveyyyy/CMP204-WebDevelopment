<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

    <title>Register an account</title>
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

                                <h1 class="text-center">Register</h1>
                                <form action="assets/php/signup-action.php" method="post" class="mx-1 mx-md-4">

<!--grid row-->

                                    <div class="flex-row d-flex align-items-center mb-4">

                                        <div class="form-floating mb-3 flex-fill">
                                            <input type="text" id="username" class="form-control" name="username" placeholder="DOOMfan1003" required/>
                                            <label class="form-label" for="username">Username</label>
                                            <small aria-describedby="usrnameReqs" class="form-text">Username must be between 3 and 20 characters long and contain only letters or numbers</small>
                                        </div>

                                    </div>

<!--grid row-->

                                    <div class="flex-row d-flex align-items-center mb-4">

                                        <div class="form-floating mb-3 flex-fill">
                                            <input type="email" id="email" class="form-control" name="email" placeholder="d.dumile@gasdrawls.com" required/>
                                            <label class="form-label" for="email">Email Address</label>
                                        </div>

                                    </div>

<!--grid row-->

                                    <div class="flex-row d-flex align-items-center mb-4">

                                        <div class="form-floating mb-3 flex-fill">
                                            <input type="password" id="passwd" class="form-control" name="passwd" placeholder="Password" required/>
                                            <label class="form-label" for="passwd">Password</label>
                                            <small aria-describedby="passwdReqs" class="form-text">Password should be longer than 10 characters and contain at least 1 capital letter, 1 number and one of the following @$!%*?</small>
                                        </div>

                                    </div>

<!--grid row-->

                                    <div class="flex-row d-flex align-items-center mb-4">

                                        <div class="form-floating mb-3 flex-fill">
                                            <input type="password" id="passwdConfirm" class="form-control" name="passwdConfirm" placeholder="Password" required/>
                                            <label class="form-label" for="passwdConfirm">Confirm Password</label>
                                        </div>

                                    </div>

<!--last grid row-->

                                    <div class="justify-content-center form-check d-flex">
                                        <p class="text-center">Read our<a href="privacyPol.php" class="form-link"> Privacy Policy</a></p>
                                    </div>

                                    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="justify-content-center btn btn-primary btn-lg" value="submitted" name="submitted">Complete Registration</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-2">
                        Already have an account? <a href="login.php" class="login-link">Sign In.</a>
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

</html>