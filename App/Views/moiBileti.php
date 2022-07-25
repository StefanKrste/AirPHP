<?php
require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/App/Data/SQLTicket.php";
$mytickets =  array();
$meil=$_SESSION['email'];
$mytickets =  myTickets($meil);
?>



    <?php foreach ($mytickets as $ticket): ?>
    <div class="mx-auto w-100 h-auto ">
<div class="card p-2 mx-auto mb-2 " style="width: 25%;">
    <img src="../../AirPHP/App/Images/karta.png" style="opacity: 0.3" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $ticket->getDes() ?></h5>
        <p class="card-text tw-bold"><?php echo $ticket->getName()." ".$ticket->getSurname() ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $ticket->getDate() ?></li>
        <li class="list-group-item"><?php echo $ticket->getClas() ?></li>

    </ul>
    <div class="card-body">
        <li class="list-group-item fw-bolder">Куфери:</li>
        <li class="list-group-item"><?php echo $ticket->getLuggage() ?></li>
        <li class="list-group-item"><?php echo $ticket->getTypeLuggage() ?></li>
    </div>
</div>
    </div>
<?php endforeach; ?>


