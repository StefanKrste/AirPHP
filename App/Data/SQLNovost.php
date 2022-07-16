<?php
require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/App/Models/Novost.php";


function AddNews($title, $description, $time)
{
    global $db;
    $query = "INSERT INTO novosti(naslov,opis,vreme)
        VALUES(?,?,?) ";
    $db->prepare($query)->execute([$title, $description, $time]);
}
function GetAllNews()
{
    global $db;
    $query = "SELECT * FROM novosti";
    $result = $db->query($query);
    $array = array();
    while ($obj = $result->fetch()) {
        $novost = new Novost($obj['id'],$obj['naslov'] ,$obj['opis'], $obj['vreme']);
        $array[] = $novost;
    }
    return $array;
}


?>