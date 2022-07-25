<?php

require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/App/Models/Ticket.php";
function Ticket($date,$des,$num_passengers,$clas,$luggage,$typeLuggage,$email,$name,$surname,$Price)
{
    global $db;
    $query = "INSERT INTO tickets (date,destination,num_passengers,type_class,num_luggage,type_luggage,emial,name,surname,price)
        VALUES(?,?,?,?,?,?,?,?,?,?) ";
    $db->prepare($query)->execute([$date,$des,$num_passengers,$clas,$luggage,$typeLuggage,$email,$name,$surname,$Price]);
}
function myTickets($email)
{
    global $db;
    $query = "SELECT * FROM tickets WHERE emial='$email' ";
    $result = $db->query($query);
    $array = array();
    while ($obj = $result->fetch()) {
        $ticket = new Ticket( $obj['date'], $obj['destination'], $obj['num_passengers'], $obj['type_class'], $obj['num_luggage'], $obj['type_luggage'], $obj['emial'], $obj['name'], $obj['surname'], $obj['price']);
        $array[] = $ticket;
    }
    return $array;
}
function Tickets()
{
    global $db;
    $query = "SELECT * FROM tickets";
    $result = $db->query($query);
    $array = array();
    while ($obj = $result->fetch()) {
        $ticket = new Ticket( $obj['date'], $obj['destination'], $obj['num_passengers'], $obj['type_class'], $obj['num_luggage'], $obj['type_luggage'], $obj['emial'], $obj['name'], $obj['surname'], $obj['price']);
        $array[] = $ticket;
    }
    return $array;
}


?>

