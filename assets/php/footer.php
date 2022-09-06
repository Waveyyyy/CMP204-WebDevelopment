<?php
if(!isset($_SESSION['signedIn']) || !($_SESSION['signedIn'] === true)) {
?>

<footer class="text-center ">

    <!--container-->

    <div class="container">

        <!--grid row-->

        <div class="row text-center justify-content-center pt-5" id="links">

            <!--grid column-->

            <div class="col-md-2">
                <h4>
                    <a href="about.php" class="footer-link">About</a>
                </h4>
            </div>

            <!--grid column-->
            <div class="col-md-2">
                <h4>
                    <a href="music.php" class="footer-link">Music</a>
                </h4>
            </div>

            <!--grid column-->

            <div class="col-md-2">
                <h4>
                    <a href="login.php" class="footer-link">Log In</a>
                </h4>
            </div>
        </div>

        <hr class="my-5">
        <br>

        <!--grid row-->

        <div class="row pb-4">
            <div class="col-md-4 justify-content-start">
                <!-- image from https://images.app.goo.gl/iUUWH3yzHkWCkJnL8 -->
                <img src="assets/img/mmfoodlogo.png" alt="logo from mm food album art" href="index.php">
            </div>
            <div class="col-md-7 justify-content-end">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue, elit vel gravida suscipit, dui felis laoreet elit, et fermentum eros metus feugiat sem. Proin dignissim sed mauris vel sollicitudin. Aliquam consectetur pellentesque enim, ut pharetra lectus mattis ut. Phasellus lacinia ex et viverra egestas. Etiam mattis diam tristique libero cursus, quis dignissim est molestie. Fusce accumsan finibus justo, et tempor massa finibus id. Integer faucibus tellus id leo molestie pellentesque.
                </p>
            </div>
        </div>
    </div>

    <!--grid row-->

    <div class="text-center ">
        <a href="req.html" class="footer-link">Website Submitted 14/12/2021 by Callum Shanks</a>
    </div>

    <br>

</footer>
<?php
} else {
    ?>
<footer class="text-center">

    <!--container-->

    <div class="container">

        <!--grid row-->

        <div class="row text-center justify-content-center pt-5" id="links">

            <!--grid column-->

            <div class="col-md-2">
                <h4>
                    <a href="about.php" class="footer-link">About</a>
                </h4>
            </div>

            <!--grid column-->
            <div class="col-md-2">
                <h4>
                    <a href="music.php" class="footer-link">Music</a>
                </h4>
            </div>

            <!--grid column-->

            <div class="col-md-2">
                <h4>
                    <a href="assets/php/logout-action.php" class="footer-link">Log Out</a>
                </h4>
            </div>
        </div>

        <hr class="my-5">
        <br>

        <!--grid row-->

        <div class="row pb-4">
            <div class="col-md-4 justify-content-start">
                <img src="assets/img/mmfoodlogo.png" alt="logo from mm food album art" href="index.php">
            </div>
            <div class="col-md-7 justify-content-end">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue, elit vel gravida suscipit, dui felis laoreet elit, et fermentum eros metus feugiat sem. Proin dignissim sed mauris vel sollicitudin. Aliquam consectetur pellentesque enim, ut pharetra lectus mattis ut. Phasellus lacinia ex et viverra egestas. Etiam mattis diam tristique libero cursus, quis dignissim est molestie. Fusce accumsan finibus justo, et tempor massa finibus id. Integer faucibus tellus id leo molestie pellentesque.
                </p>
            </div>
        </div>
    </div>

    <!--grid row-->

    <div class="text-center ">
        <a href="req.html" class="footer-link">Website Submitted 14/12/2021 by Callum Shanks</a>
    </div>

    <br>

</footer>

<?php
}
?>