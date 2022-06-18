<?php
require '../App/Data/SQLFlight.php';

$allDes = GetAllDes();

function cmp($a, $b)
{
    return strcmp($a->getDestination(), $b->getDestination());
}

usort($allDes, "cmp");
if (isset($_SESSION["points"])){
    $points = $_SESSION["points"];
}else{
    $points = 0;
}
?>
<script>
    window.onload = function() {
        Price();
    };

    function selectDes() {
        var des = document.getElementById("des");
        var value = des.options[des.selectedIndex].value;

        window.open("../App/Controllers/Destination.php?value=" + value, "_self");
    }

    function ShowMessage(){
        var UserName = "<?php if (isset($_SESSION["username"])){
                echo $_SESSION["username"];
            }else {
                echo "0";
            }
        ?>";
        if(UserName==0) {
            document.getElementById('message').innerHTML = "За да користите поени потребно е да се најавите!!!";
        }
    }

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    function GetPoints()
    {
        var points = '<%= Session["points"] %>';
        return points;
    }

    function Price(){
        var Passengers = document.getElementById("Passengers").value;
        var BasePrice = getCookie("PriceTicket");
        if(BasePrice === undefined){
            BasePrice = 0;
        }
        var luggage = document.getElementById("luggage").value;
        var radio = 0;
        if(document.getElementById('classB').checked){
            radio = 0.25

        }else if(document.getElementById('classE+').checked){
            radio = 0.10
        }
        var weight = document.getElementById("weight");
        var Selweight = weight.options[weight.selectedIndex].value;
        var weightPrice = 1000;
        if(Selweight==='30кг-1300ден'){
            weightPrice=1300;
        }else if(Selweight==='40кг-1600ден'){
            weightPrice=1600;
        }
        var points = <?php echo $points;?>;
        var Price = (Passengers*BasePrice)*(1+radio)+luggage*weightPrice;
            if(document.getElementById("UsePoints").checked){
                Price=Price-points;
            }
        if(Price<0){
            Price=0;
        }
        Price = Price.toFixed(2);
        document.getElementById("value1").innerHTML=Price;
        document.getElementById("value2").value=Price;
    }

    function checkchooseDate(){
        const d = new Date(document.getElementById("Date").value)
        var day = d.getDay();
        if(getCookie("MoTicket") !== undefined){
            if(day===1){
                return true;
            }
        }
        if(getCookie("TuTicket") !== undefined){
            if(day===2){
                return true;
            }
        }
        if(getCookie("WeTicket") !== undefined){
            if(day===3){
                return true;
            }
        }
        if(getCookie("ThTicket") !== undefined){
            if(day===4){
                return true;
            }
        }
        if(getCookie("FrTicket") !== undefined){
            if(day===5){
                return true;
            }
        }
        if(getCookie("SaTicket") !== undefined){
            if(day===6){
                return true;
            }
        }
        if(getCookie("SuTicket") !== undefined){
            if(day===0){
                return true;
            }
        }
        return false;
    }

    function chooseDate(){
        if(!checkchooseDate()) {
            document.getElementById('messageDate').innerHTML = "Ве молиме изберете ден во кој го има избраниот лет!!!";
            document.getElementById("Date").value = '';
        }else {
            document.getElementById('messageDate').innerHTML = "";
        }
    }
</script>

<form action="../../Public/index.php" method="post">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="w-25 p-3 border border-primary mt-5">
            <div class="form-group">
                <label for="from">Дестинација: </label>
                <?php
                echo "<select id=des name=des onchange='selectDes();Price();'></option>";
                if (isset($_COOKIE['destinationTicket'])) {
                    $city = $_COOKIE['destinationTicket'];
                    echo "<option>$city</option>";
                }
                echo "<option>Изберете локација</option>";
                foreach ($allDes as $row) {
                    $city = $row->getDestination();
                    echo "<option>$city</option>";
                }
                echo "</select>";
                ?>
            </div>
            <div class="form-group">
                <label for="Date">Датум на поаѓање: </label>
                <input type="date" id="Date" name="Date" onchange="chooseDate()" required><br>
                <label>
                    <?php
                    if (isset($_COOKIE['MoTicket'])) {
                        $Mo = $_COOKIE['MoTicket'];
                        echo "Понеделник " . $Mo . " <br>";
                    }
                    if (isset($_COOKIE['TuTicket'])) {
                        $Tu = $_COOKIE['TuTicket'];
                        echo "Вторник " . $Tu . " <br>";
                    }
                    if (isset($_COOKIE['WeTicket'])) {
                        $We = $_COOKIE['WeTicket'];
                        echo "Среда " . $We . " <br>";
                    }
                    if (isset($_COOKIE['ThTicket'])) {
                        $Th = $_COOKIE['ThTicket'];
                        echo "Четврток " . $Th . " <br>";
                    }
                    if (isset($_COOKIE['FrTicket'])) {
                        $Fr = $_COOKIE['FrTicket'];
                        echo "Петок " . $Fr . " <br>";
                    }
                    if (isset($_COOKIE['SaTicket'])) {
                        $Su = $_COOKIE['SaTicket'];
                        echo "Сабота " . $Su . " <br>";
                    }
                    if (isset($_COOKIE['SuTicket'])) {
                        $Sa = $_COOKIE['SuTicket'];
                        echo "Недела " . $Sa . " <br>";
                    }
                    ?></label>
                <label class="text-danger font-weight-bold mb-2" id="messageDate" ></label>
            </div>
            <div class="form-group">
                <label for="Passengers">Број на патници: </label>
                <input type="number" id="Passengers" name="Passengers" min="1" max="78" value="1" onchange="Price()">
            </div>
            <div class="form-group mb-0">
                <label for="age">Класа на седиште: </label><br>
                <input type="radio" id="classB" name="AirClass" value="Бизнис класа" onchange="Price()">
                <label for="classB">Бизнис класа</label>
                <label class="float-right"><?php if (isset($_COOKIE['PriceTicket'])) {
                        $Price = $_COOKIE['PriceTicket'];
                        echo "Цена за едно лице: " . $Price . "ден +25%";
                    } ?></label><br>
                <input type="radio" id="classE+" name="AirClass" value="Економска +" onchange="Price()">
                <label for="classE+">Економска +</label>
                <label class="float-right"><?php if (isset($_COOKIE['PriceTicket'])) {
                        $Price = $_COOKIE['PriceTicket'];
                        echo "Цена за едно лице: " . $Price . "ден +10%";;
                    } ?></label><br>
                <input type="radio" id="classE" name="AirClass" value="Економска" checked onchange="Price()">
                <label for="classE">Економска</label>
                <label class="float-right"><?php if (isset($_COOKIE['PriceTicket'])) {
                        $Price = $_COOKIE['PriceTicket'];
                        echo "Цена за едно лице: " . $Price . "ден";
                    } ?></label><br>
            </div>
        </div>
    </div>
    <img src="../App/Images/Boing.jpg" width="1000" height="400" class="mx-auto d-block">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="w-25 p-3 border border-primary">
            <div class="form-group">
                <label for="luggage">Број на куфери: </label>
                <input type="number" id="luggage" name="luggage" min="0" max="10" value="0" onchange="Price()"><br>

                <label for="from">Тежина на куфер: </label>
                <select id='weight' name=weight onchange="Price()">
                <?php
                $array = array("20кг-1000ден", "30кг-1300ден", "40кг-1600ден");
                foreach ($array as $row) {
                    echo "<option>$row</option>";
                }
                echo "</select>";
                ?>
            </div>
        </div>
    </div>
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="w-25 p-3 border border-primary m-5">
            <input type="checkbox" id="UsePoints" name="UsePoints" class="mt-3 mb-3" onchange="ShowMessage();Price();" value="1"> Искористи поените за попуст <br>
            <label class="text-danger font-weight-bold mb-2" id="message"></label><br>
            <label id="value">Износ: </label>
            <output id="value1" name="value1">0</output>
            <input type="hidden" id="value2" name="value2"/>
            <button class="ml-5 btn btn-primary">Потврди</button>
        </div>
    </div>
</form>

