<?php

require '../Data/SQLUser.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = login($username);
if($user!=0) {
    $userPwd = $user['password'];
    $compare = password_verify($password, $userPwd);

    if ($compare == false) {
        header('Location: ../../Public/index.php?error=1&page=login');
        exit();
    } else {
        if (isset($_POST['remember_user'])) {
            setcookie('usernameCookie', $username, time() + (10 * 365 * 24 * 60 * 60),'/');
            setcookie('passwordCookie', $password, time() + (10 * 365 * 24 * 60 * 60),'/');
        } else {
            if (isset($_COOKIE['usernameCookie'])) {
                unset($_COOKIE['usernameCookie']);
                setcookie('usernameCookie', null, -1,'/');
            }
            if (isset($_COOKIE['passwordCookie'])) {
                unset($_COOKIE['passwordCookie']);
                setcookie('passwordCookie', null, -1,'/');
            }
        }
        session_start();
        $_SESSION['points'] = $user['points'];
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        header('Location: ../../Public/index.php?page=home');
        exit();
    }
}else {
    header('Location: ../../Public/index.php?error=2&page=login');
    exit();
}

?>


