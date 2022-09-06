<?php if(isset($_SESSION['signedIn']) && ($_SESSION['signedIn'] === true) ) {
    ?>
    <header>
        <nav class="navbar navbar-dark navbar-expand-md" id="navbar">

            <!--grid column-->

            <div class="navbar-collapse collapse w-100 order-1 order-md-0 trio-collapse">

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.php">Music</a>
                    </li>
                </ul>

            </div>

            <!--grid column-->

            <div class="mx-auto order-0">

                <a href="index.php" class="navbar-brand mx-auto">
                    <!-- image from https://dribbble.com/shots/1346962-Venomous-Villain-Design -->
                    <img src="assets/img/doommask-nobackground.svg" height="70" alt="Home button, MF DOOM mask">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".trio-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>

            <!--grid column-->

            <div class="navbar-collapse collapse w-100 order-3 trio-collapse">

                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="account.php"><?php echo htmlspecialchars($_SESSION['username']);?></a>
                    </li>
                </ul>

            </div>

            <!--last grid column-->

        </nav>
    </header>
<?php
} else {
    ?>
    <header>
        <nav class="navbar navbar-dark navbar-expand-md" id="navbar">

            <!--grid column-->

            <div class="navbar-collapse collapse w-100 order-1 order-md-0 trio-collapse">

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.php">Music</a>
                    </li>
                </ul>

            </div>

            <!--grid column-->

            <div class="mx-auto order-0">

                <a href="index.php" class="navbar-brand mx-auto">
                    <img src="assets/img/doommask-nobackground.svg" height="70" alt="Home button, MF DOOM mask">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".trio-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>

            <!--grid column-->

            <div class="navbar-collapse collapse w-100 order-3 trio-collapse">

                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                </ul>

            </div>

            <!--last grid column-->

        </nav>
    </header>

<?php
}
?>