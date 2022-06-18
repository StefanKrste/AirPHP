<?php

require '../App/Data/SQLFlight.php';

$price = $_POST['value2'];
$des = $_POST['des'];
$Date = $_POST['Date'];
$Passengers = $_POST['Passengers'];
$AirClass = $_POST['AirClass'];
$PrecAirClass= 0;
if($AirClass === "Бизнис класа"){
    $PrecAirClass = 0.25;

}else if($AirClass === "Економска +"){
    $PrecAirClass = 0.10;
}
$luggage = $_POST['luggage'];
$weight = $_POST['weight'];

if (isset($_SESSION["points"])){
    $points = $_SESSION['points'];
}

$weightPrice = 1000;
if($weight === "30кг-1300ден"){
    $weightPrice=1300;
}else if ($weight === "40кг-1600ден"){
    $weightPrice=1600;
}


$destination = GetDes($des);

$BasePrice = $destination->getBasePrice();
$Price = $Passengers * $BasePrice* (1+$PrecAirClass) + $luggage * $weightPrice;
$SubPoints = 0;
if(isset($_POST['UsePoints']) && $points<$Price) {
    $Price=$Price-$points;
    $SubPoints = $points;
}else if (isset($_POST['UsePoints']) && $points>$Price) {
    $Price = "1";
    $SubPoints = $Price-1;
}

$Price = number_format((float)$Price, 2, '.', '');

if(!isset($destination) || $Price<0){
    header('Location: ../../Public/index.php?page=home');
    exit();
}

$Time = "0";
if (isset($_COOKIE['MoTicket']) && date('w', strtotime($Date)) === '1') {
    $Time = $_COOKIE['MoTicket'];
}
if (isset($_COOKIE['TuTicket']) && date('w', strtotime($Date)) === '2') {
    $Time = $_COOKIE['TuTicket'];
}
if (isset($_COOKIE['WeTicket']) && date('w', strtotime($Date)) === '3') {
    $Time = $_COOKIE['WeTicket'];
}
if (isset($_COOKIE['ThTicket']) && date('w', strtotime($Date)) === '4') {
    $Time = $_COOKIE['ThTicket'];
}
if (isset($_COOKIE['FrTicket']) && date('w', strtotime($Date)) === '5') {
    $Time = $_COOKIE['FrTicket'];
}
if (isset($_COOKIE['SaTicket']) && date('w', strtotime($Date)) === '6') {
    $Time = $_COOKIE['SaTicket'];
}
if (isset($_COOKIE['SuTicket']) && date('w', strtotime($Date)) === '0') {
    $Time = $_COOKIE['SuTicket'];
}
if ($Time ==="0" ) {
    header('Location: ../../Public/index.php?page=home');
    exit();
}
?>

<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="w-25 p-3 border border-primary m-5">
        <form action="../../AirPHP/App/Controllers/Mail.php" method="post">
            <input type="hidden" name="des" value="<?php echo $des?>">
            <input type="hidden" name="Date" value="<?php echo $Date."  ".$Time?>">
            <input type="hidden" name="Passengers" value="<?php echo $Passengers?>">
            <input type="hidden" name="AirClass" value="<?php echo $AirClass?>">
            <input type="hidden" name="luggage" value="<?php echo $luggage?>">
            <input type="hidden" name="weight" value="<?php echo $weight?>">
            <input type="hidden" name="Price" value="<?php echo $Price?>">
            <input type="hidden" name="SubPoints" value="<?php echo $SubPoints?>">
            <h1 id="h1-text">Плаќање</h1>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name"
                       placeholder="Име" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="surname" name="surname"
                       placeholder="Презиме" required>
            </div>
            <?php if (isset($_SESSION["username"])) :?>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Емаил" required value="<?php echo $_SESSION["email"];?>">
            </div>
            <?php else : ?>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Емаил" required>
                </div>
            <?php endif; ?>
            <label>Износ: </label>
            <label><?php echo $Price; ?></label>
            <input type="submit" class="btn btn-primary ml-5" value="Плати"/>
        </form>
    </div>
</div>
