<?php
require_once "validations.php";
require_once "db-connect.php";
global $db_hostname, $db_username, $db_passwd, $db_name;

session_start();

$id = $_SESSION['id'];

// GLOBALS
$PASSWD = "";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $PASSWD = validatePasswd($_POST['passwd']);
}

if ($PASSWD === NULL){
    echo '
    <p style="color: black">You will be redirected back to the <a href="../../account.php"> account information page </a> in about 4 seconds</p>
    ';
    die();
}

// salt and hash password
$PASSWD = password_hash($PASSWD, PASSWORD_BCRYPT);


$con = mysqli_connect($db_hostname, $db_username, $db_passwd, $db_name);

// Check connection

if (!$con){
    die("Connection Failed" . mysqli_connect_error());
}

$sql = "UPDATE Users SET password = ? WHERE id = ?";

if ($statement = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($statement, "ss", $PASSWD, $id);

    if(mysqli_stmt_execute($statement)){
        echo '
            <p style="color: green">Password changed!</p>
        ';
    } else {
        echo '
            <p style="color: red">An error has occurred,</p>
        ';
    }
    echo '
        <p style="color: black">You will be redirected back to the <a href="../../account.php"> account information page </a> in about 4 seconds</p>
    ';
    header("refresh: 4;Location: ../../account.php");
}
mysqli_close($con);