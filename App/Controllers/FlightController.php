<?php
require_once $_SERVER['DOCUMENT_ROOT']."/App/Data/SQLFlight.php";
$destination= $_POST['destinacija'];
$base_price = $_POST['baznacena'];
$mo= $_POST['ponedelnik'];
$tu= $_POST['vtornik'];
$we= $_POST['sreda'];
$th= $_POST['cetvrtok'];
$fr= $_POST['petok'];
$sa= $_POST['sabota'];
$su=  $_POST['nedela'];
 AddFlight($destination, $base_price, $mo,$tu,$we,$th,$fr,$sa,$su);

header('Location: ../../Public/index.php?page=home'); ///za da se refreshne
exit();

?>