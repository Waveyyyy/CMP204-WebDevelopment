<?php
require_once "db-connect.php";
global $db_hostname, $db_username, $db_passwd, $db_name;

$ALBUM = $_REQUEST['desc'];


$con = mysqli_connect($db_hostname, $db_username, $db_passwd, $db_name);

// check connection

if (!$con){
    die("Connection Failed" . mysqli_connect_error());
}

$sql = "SELECT description FROM albumDetails WHERE name = ?";

if ($statement = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($statement, "s", $ALBUM);
    if (!($ALBUM === NULL)){
        if (mysqli_stmt_execute($statement)){
            mysqli_stmt_store_result($statement);

            if (mysqli_stmt_num_rows($statement) === 1){
                mysqli_stmt_bind_result($statement, $description);

                if (mysqli_stmt_fetch($statement)){
                    echo $description;
                }
            }
        }
    }
    mysqli_stmt_close($statement);
} else {
    die();
}
mysqli_close($con);