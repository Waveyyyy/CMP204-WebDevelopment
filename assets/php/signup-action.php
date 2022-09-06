<?php
require_once "validations.php";
require_once "db-connect.php";
global $db_hostname, $db_username, $db_passwd, $db_name;

// GLOBALS
$USERNAME = $EMAIL = $PASSWD = $PASSWDCONFIRM = "";
$CONFIRMSUCCESS = true;
$VALIDPASSWD = array(true, true);

// Get form results
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $USERNAME = validateUsername($_POST["username"]);
    $EMAIL = validateEmailAddr($_POST["email"]);
    $PASSWD = validatePasswd($_POST["passwd"]);
    $PASSWDCONFIRM = validateConfirmedPasswd($_POST["passwdConfirm"]);

}


// Password shenanigans
if (!($PASSWD === $PASSWDCONFIRM)) {
    echo '
        <p style="color: red"> Passwords do not match!</p>
    ';
    $CONFIRMSUCCESS = false;
}

// password hashing and salting
$PASSWD = password_hash($PASSWD, PASSWORD_BCRYPT);


$con = mysqli_connect($db_hostname, $db_username, $db_passwd, $db_name);

// check connection

if (!$con){
    die("Connection Failed" . mysqli_connect_error());
}

$sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";

if ($statement = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($statement, "sss", $USERNAME, $EMAIL, $PASSWD);
    if (isset($USERNAME, $EMAIL, $PASSWD, $PASSWDCONFIRM) && $CONFIRMSUCCESS && in_array(true, $VALIDPASSWD)) {
        if (mysqli_stmt_execute($statement)) {
            echo '
                <p style="color: green">New User Created</p>
                <p style="color: black">You will be redirected to the <a href="../../login.php"> login page</a> in 4 Seconds</p>
            ';
            header("refresh: 4;Location: ../../login.php");
            exit();
        }
    } else {
        echo '
            <p style="color: red">An error has occured,</p>
            <p style="color: black">You will be redirected back to the <a href="../../register.php"> registration page </a> in 4 Seconds</p>
        ';
        header("refresh: 4;Location: ../../register.php");
    }
}

unset($USERNAME, $EMAIL, $PASSWD, $PASSWDCONFIRM, $CONFIRMSUCCESS, $VALIDPASSWD);

mysqli_close($con);