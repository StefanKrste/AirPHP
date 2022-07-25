<?php

    session_start();
    session_destroy();

    if (isset($_COOKIE['idTicket'])) {
        unset($_COOKIE['idTicket']);
        setcookie('idTicket', null, -1,'/');
    }
    if (isset($_COOKIE['destinationTicket'])) {
        unset($_COOKIE['destinationTicket']);
        setcookie('destinationTicket', null, -1,'/');
    }
    if (isset($_COOKIE['PriceTicket'])) {
        unset($_COOKIE['PriceTicket']);
        setcookie('PriceTicket', null, -1,'/');
    }
    if (isset($_COOKIE['MoTicket'])) {
        unset($_COOKIE['MoTicket']);
        setcookie('MoTicket', null, -1,'/');
    }
    if (isset($_COOKIE['TuTicket'])) {
        unset($_COOKIE['TuTicket']);
        setcookie('TuTicket', null, -1,'/');
    }
    if (isset($_COOKIE['WeTicket'])) {
        unset($_COOKIE['WeTicket']);
        setcookie('WeTicket', null, -1,'/');
    }
    if (isset($_COOKIE['ThTicket'])) {
        unset($_COOKIE['ThTicket']);
        setcookie('ThTicket', null, -1,'/');
    }
    if (isset($_COOKIE['FrTicket'])) {
        unset($_COOKIE['FrTicket']);
        setcookie('FrTicket', null, -1,'/');
    }
    if (isset($_COOKIE['SaTicket'])) {
        unset($_COOKIE['SaTicket']);
        setcookie('SaTicket', null, -1,'/');
    }
    if (isset($_COOKIE['SuTicket'])) {
        unset($_COOKIE['SuTicket']);
        setcookie('SuTicket', null, -1,'/');
    }

    header('Location: ../../Public/index.php?page=home');
    Exit();

?>