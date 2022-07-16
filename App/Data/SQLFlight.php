<?php

require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/App/Models/Flight.php";

function AddFlight($destination, $base_price, $mo,$tu,$we,$th,$fr,$sa,$su)
{
    global $db;
    $query = "INSERT INTO flights(destination,base_price, mo,tu,we,th,fr,sa,su)
        VALUES(?,?,?,?,?,?,?,?,?) ";
    $db->prepare($query)->execute([$destination,$base_price,$mo,$tu,$we,$th,$fr,$sa,$su]);
}

function GetAllDes()
{
    global $db;
    $query = "SELECT * FROM flights";
    $result = $db->query($query);
    $array = array();
    while ($obj = $result->fetch()) {
        $flight = new Flight($obj['id'], $obj['destination'], $obj['base_price'], $obj['mo'], $obj['tu'], $obj['we'], $obj['th'], $obj['fr'], $obj['sa'], $obj['su']);
        $array[] = $flight;
    }
    return $array;
}

function GetDes($destination)
{
    global $db;
    $query = "SELECT * FROM flights WHERE destination='$destination'";
    $result = $db->query($query);
    while ($obj = $result->fetch()) {
        $flight = new Flight($obj['id'], $obj['destination'], $obj['base_price'], $obj['mo'], $obj['tu'], $obj['we'], $obj['th'], $obj['fr'], $obj['sa'], $obj['su']);
    }
    return $flight;
}

function Ticket($date,$des,$pass,$clas,$luggage,$typeLuggage,$email,$name,$surname,$Price)
{
    global $db;
    $query = "INSERT INTO tickets (date,destination,num_passengers,type_class,num_luggage,type_luggage,emial,name,surname,price)
        VALUES(?,?,?,?,?,?,?,?,?,?) ";
    $db->prepare($query)->execute([$date,$des,$pass,$clas,$luggage,$typeLuggage,$email,$name,$surname,$Price]);
}

?>