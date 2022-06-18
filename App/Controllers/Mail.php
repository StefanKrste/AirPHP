<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
require '../PHPMailer/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT']."/App/Data/SQLFlight.php";
require_once $_SERVER['DOCUMENT_ROOT']."/App/Data/SQLUser.php";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $des = $_POST['des'];
    $Date = $_POST['Date'];
    $Passengers = $_POST['Passengers'];
    $AirClass = $_POST['AirClass'];
    $luggage = $_POST['luggage'];
    $weight = $_POST['weight'];
    $Price = $_POST['Price'];
    $SubPoints = $_POST['SubPoints'];

    Ticket($Date,$des,$Passengers,$AirClass,$luggage,$weight,$email,$name,$surname,$Price);
session_start();
if(isset($_SESSION['username'])){
    $_SESSION['points'] = $_SESSION['points']-$SubPoints;
    SubPoints($SubPoints,$_SESSION['username']);
}
if(isset($_SESSION['username'])){
    $NewPoints=(((int)$Price/100)*3);
    $NewPoints = number_format((float)$NewPoints, 2, '.', '');
    $_SESSION['points'] = $_SESSION['points']+$NewPoints;
    AddPoints($NewPoints,$_SESSION['username']);
}



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

$body = "<p>Успешно направивте купување на билет од AirPHP, во прилог ви испраќаме податоци за истиот</p>
<p> ------------------------------------------------------------------------  </p>
<p>Купувач: ".$name." ".$surname."</p>
<p>Дестинација: ".$des."</p>
<p>Датум: ".$Date."</p>
<p>Број на патници: ".$Passengers.".    Класа на патување: ".$AirClass."</p>
<p>Број на куфери: ".$luggage.".    Тежина на куферот: ".$weight."</p>
<p>Платено: ".$Price."</p>
<p> ------------------------------------------------------------------------  </p>
<br><p>Со полит,</p><p>AirPHP</p>";

    $mail = new PHPMailer();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.mail.yahoo.com";
    $mail->Port = 465;
$mail->CharSet = 'UTF-8';
    $mail->Username = 'php.app@yahoo.com';
    $mail->Password = 'ffppdgpqvtvlsvgp';


    $mail->setFrom("php.app@yahoo.com", "AirPHP");
    $mail->addAddress($email, "$name $surname");
    $mail->Subject = "Bileti AirPHP";
    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);
    $mail->isHTML(true);

    if(!$mail->send()) {
        throw new Exception('Error sending email: ' .
            htmlspecialchars($mail->ErrorInfo) );
    }

    header('Location: ../../Public/index.php?page=home');
    exit();
?>