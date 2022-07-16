<?php
require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/App/Data/SQLNovost.php";
$allNews =  array();
$allNews = array_reverse(GetAllNews());


?>
<script>
    function otvori() {
        var element = document.getElementById("forma");
        element.classList.toggle("d-block");

    }

</script>
<div class="h-100  align-items-center justify-content-center">
    <?php if ( isset($_SESSION['role']) && $_SESSION['role'] == "Admin") { ?>
        <div > <button  class="btn btn-link mx-auto" id="dodaj" onclick="otvori()" >Додади новост</button></div>

        <form class="d-none " id="forma" action="../App/Controllers/NovostiController.php" method="post">
            <div class="border border w-25  p-3 mx-auto mb-3">
                <div class="w-100 "><h3>Формулар за додавање на новости</h3></div>
            <div class="mb-3 mx-auto w-100  ">
                <label for="exampleFormControlInput1" class="form-label ">Наслов</label>
                <input type="text" class="form-control " id="title" name="title" ">
            </div>
            <div class="mb-3 mx-auto w-100">
                <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                <textarea class="form-control" id="opsi" name="opis" rows="3"></textarea>
                <button type="submit"class="btn btn-primary mt-1 " >Додади</button>
            </div>
            </div>

        </form>

    <?php } ?>

</div>
<div class="list-group">
    <?php foreach ($allNews as $nov):?>

    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?php echo $nov->getTitle() ?></h5>
            <small class="text-muted"><?php echo $nov->getTime() ?></small>
        </div>
        <p class="mb-1"><?php echo $nov->getDescription() ?></p>
<!--        <small class="text-muted">And some muted small print.</small>-->
    </a>
    <?php endforeach; ?>

</div>


