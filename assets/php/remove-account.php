<?php
session_start();
require_once "db-connect.php";
global $db_hostname, $db_username, $db_passwd, $db_name;

$id = $_SESSION['id'];



$con = mysqli_connect($db_hostname, $db_username, $db_passwd, $db_name);

// check connection
if (!$con){
    die("Connection Failed" . mysqli_connect_error());
}

// Prepared statement
$sql = "DELETE FROM Users WHERE id = ?";

if (!($id === 0) && ($statement = mysqli_prepare($con, $sql)) ){
    mysqli_stmt_bind_param($statement, "s", $id);

    if (mysqli_stmt_execute($statement)) {
        echo '
            <p style="color: black">User deleted, you will be redirected to the <a href="../../index.php"> in around 4 seconds</a> </p>
        ';

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["signedIn"], $params["id"],
                $params["username"], $params["email"]
            );
        }
        session_destroy();
        header("Location: ../../index.php");
        sleep(4);
    }
} else{
    echo '
        <p style="color: red">An error has occured,</p>
    ';
    if($id === 0) {
        echo '
            <p style="color: red">The administrator account cannot be deleted</p>
        ';
    }
    echo '
        <p style="color: red">You will be redirected to the <a href="../../account.php">account</a> page in about 4 seconds</p>
    ';
    header("refresh: 4;Location ../../account.php");
}

mysqli_close($con);