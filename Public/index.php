<?php

require_once '../App/Config/config.php';

include '../App/Views/Header.php';

if (isset($_GET['page'])) {
    if ($_GET['page'] == "home") {
        include '../App/Views/Home.php';
    } else if ($_GET['page'] == "login") {
        include '../App/Views/Login.php';
    }else if ($_GET['page'] == "signup") {
        include '../App/Views/SignUp.php';
    }
    else if ($_GET['page'] == "news") {
        include '../App/Views/News.php';
    }
    else if ($_GET['page'] == "zaNas") {
        include '../App/Views/zaNas.php';
    }
    else if ($_GET['page'] == "zaNas") {
        include '../App/Views/zaNas.php';
    }
    else if ($_GET['page'] == "moiBileti") {
        include '../App/Views/moiBileti.php';
    }
}elseif (isset($_POST['value2'])) {
    include '../App/Views/Payment.php';

}else {
    include '../App/Views/Home.php';
}
include '../App/Views/Footer.php';
?>