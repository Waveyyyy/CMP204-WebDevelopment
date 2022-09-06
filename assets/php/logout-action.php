<?php

session_start();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 50000,
        $params["signedIn"], $params["id"],
        $params["username"], $params["email"]
    );
}
session_destroy();
header("Location: ../../index.php");
sleep(3);
exit();