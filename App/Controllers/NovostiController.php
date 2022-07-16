<?php
require_once $_SERVER['DOCUMENT_ROOT']."/App/Data/SQLNovost.php";
$title= $_POST['title'];
$desctription = $_POST['opis'];
 AddNews($title,$desctription,date("d-m-Y H:i"));

header('Location: ../../Public/index.php?page=news'); ///za da se refreshne
exit();

?>