<?php

// remove unwanted chars from strings, helps to avoid attacks like SQLi, XSS, etc.
function strip($x){
    $x = htmlspecialchars($x); // changes & " ' < > to html entities
    return stripslashes($x);  // removes any backslashes
}

// Validate Input
function validateUsername($username)
{
    $username = strip($username);
    if (!$username) {
        echo '
            <p style="color: red">Username cannot be blank</p>
        ';
    } else if(!preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)){
        echo '
            <p style="color:red">Invalid Username (alphanumeric characters only, between 3 and 20 characters long)</p>
        ';
        return NULL;
    }
    return $username;
}

function validateEmailAddr($email){
    $email = strip($email);
    if (!$email){
        echo '
            <p style="color: red">Email cant be blank</p>
        ';
        return NULL;
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo '
            <p style="color:red">Invalid Email (example: d.dumile@gasdrawls.com)</p>
        ';
        return NULL;
    }
    return $email;
}


function validatePasswd($passwd){
    $passwd = strip($passwd);
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?])[a-zA-Z\d@$!%*?]{10,20}$/', $passwd)){
        echo '
            <p style="color:red">Password should be longer than 10 characters and contain atleast 1 capital letter, 1 number and one of the following @$!%*?</p>
        ';
        $GLOBALS['VALIDPASSWD'] = array_fill(0, 1, false);
        return NULL;
    }
    return $passwd;
}

function validateConfirmedPasswd($passwdConf){
    $passwdConf = strip($passwdConf);
    if (!$passwdConf) {
        echo '
            <p style="color: red">Please confirm your password!</p>
        ';
        $GLOBALS['VALIDPASSWD'] = array_fill(1, 1, false);
        return NULL;
    }
    return $passwdConf;
}