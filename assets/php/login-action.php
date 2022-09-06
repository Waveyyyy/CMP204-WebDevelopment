<?php
require_once "validations.php";
require_once "db-connect.php";
global $db_hostname, $db_username, $db_passwd, $db_name;

// GLOBALS
$USERNAME = $PASSWD = "";

// Get form results
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $USERNAME = validateUsername($_POST["username"]);
    $PASSWD = validatePasswd($_POST["passwd"]);

}


$con = mysqli_connect($db_hostname, $db_username, $db_passwd, $db_name);

// check connection
if (!$con){
    die("Connection Failed" . mysqli_connect_error());
}

// Prepared statement
$sql = "SELECT id, username, email, password FROM Users WHERE username = ?";

if (!($USERNAME === NULL || $PASSWD === NULL) && ($statement = mysqli_prepare($con, $sql))){
    mysqli_stmt_bind_param($statement, "s", $USERNAME);

    if (mysqli_stmt_execute($statement)) {
        mysqli_stmt_store_result($statement);

        // Checks if one row(user) was returned from these credentials
        if (mysqli_stmt_num_rows($statement) === 1) {
            mysqli_stmt_bind_result($statement, $id, $username, $email, $passwd);

            // check creds match
            if (mysqli_stmt_fetch($statement) && password_verify($PASSWD, $passwd)) {
                session_start();

                $_SESSION["signedIn"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $email;

                echo '
                  <p style="color: green">Successfully logged in, you will be redirected to the <a href="../../index.php"> Homepage </a> in around 4seconds</p>  
                ';
                header("refresh: 3;Location: ../../index.php");
                die();
            }

        }

    }
    mysqli_stmt_close($statement);
}else {
    echo '
    <p style="color: red">An error has occurred</p>
    ';
}
echo '
    <p style="color: black">You will be redirected back to the <a href="../../register.php"> Login page </a> in 4 Seconds</p>
   ';
header("refresh: 4;Location: ../../register.php");
mysqli_close($con);

unset($USERNAME, $PASSWD);

