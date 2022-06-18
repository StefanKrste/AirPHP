<?php

require '../Data/SQLFlight.php';

$des = $_GET['value'];
$allDes = GetAllDes();
$array = array();
foreach ($allDes as $row) {
    if ($des === $row->getDestination()) {
        $array[0] = $row->getId();
        $array[1] = $row->getDestination();
        $array[2] = $row->getBasePrice();
        $array[3] = $row->getMo();
        $array[4] = $row->getTu();
        $array[5] = $row->getWe();
        $array[6] = $row->getTh();
        $array[7] = $row->getFr();
        $array[8] = $row->getSa();
        $array[9] = $row->getSu();
    }
}

if (count($array)) {
    setcookie('idTicket', $array[0], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('destinationTicket', $array[1], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('PriceTicket', $array[2], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('MoTicket', $array[3], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('TuTicket', $array[4], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('WeTicket', $array[5], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('ThTicket', $array[6], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('FrTicket', $array[7], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('SaTicket', $array[8], time() + (10 * 365 * 24 * 60 * 60), '/');
    setcookie('SuTicket', $array[9], time() + (10 * 365 * 24 * 60 * 60), '/');
} else {
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
}
header('Location: ../../Public/index.php?page=home');
exit();

?>