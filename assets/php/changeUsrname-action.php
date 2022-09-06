<?php
require_once "validations.php";
require_once "db-connect.php";
global $db_hostname, $db_username, $db_passwd, $db_name;

session_start();

$id = $_SESSION['id'];

// GLOBALS
$USERNAME = "";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $USERNAME = validateUsername($_POST['username']);
}

if ($USERNAME === NULL){
    echo '
    <p style="color: black">You will be redirected back to the <a href="../../account.php"> account information page </a> in about 4 seconds</p>
    ';
    die();
}


$con = mysqli_connect($db_hostname, $db_username, $db_passwd, $db_name);

// Check connection

if (!$con){
    die("Connection Failed" . mysqli_connect_error());
}

$sql = "UPDATE Users SET username = ? WHERE id = ?";

if ($statement = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($statement, "ss", $USERNAME, $id);

    if(mysqli_stmt_execute($statement)){
        echo '
            <p style="color: green">Username changed!</p>
        ';
        $_SESSION['username'] = $USERNAME;
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
