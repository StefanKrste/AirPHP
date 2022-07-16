<?php

require '../Data/SQLUser.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];


$checkUsername = checkUsername($username);
$checkEmail = checkEmail($email);

setcookie('SignUpusernameCookie', $username, time() + (10 * 365 * 24 * 60 * 60),'/');
setcookie('SignUpemailCookie', $email,time() + (10 * 365 * 24 * 60 * 60),'/');
setcookie('SignUppasswordCookie', $password,time() + (10 * 365 * 24 * 60 * 60),'/');
setcookie('SignUppassword2Cookie', $password2, time() + (10 * 365 * 24 * 60 * 60),'/');

if($checkUsername!=0) {
    header('Location: ../../Public/index.php?error=2&page=signup');
    exit();
} elseif ($checkEmail!=0){
    header('Location: ../../Public/index.php?error=3&page=signup');
    exit();
} elseif ($password != $password2){
    header('Location: ../../Public/index.php?error=4&page=signup');
    exit();
}

if(strlen($username)>=8 && strlen($password)>=8 && filter_var($email, FILTER_VALIDATE_EMAIL)){
    singup($username,$password,$email);
    session_start();
    $_SESSION['points'] = 0;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    unset($_COOKIE['SignUpusernameCookie']);
    setcookie('SignUpusernameCookie', null, -1,'/');

    unset($_COOKIE['SignUpemailCookie']);
    setcookie('SignUpemailCookie', null, -1,'/');

    unset($_COOKIE['SignUppasswordCookie']);
    setcookie('SignUppasswordCookie', null, -1,'/');

    unset($_COOKIE['SignUppassword2Cookie']);
    setcookie('SignUppassword2Cookie', null, -1,'/');


    header('Location: ../../Public/index.php?page=home');
    exit();
}else{
    header('Location: ../../Public/index.php?error=1&page=signup');
    exit();
}

?>




