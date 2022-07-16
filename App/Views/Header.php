<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>AirPHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light border-bottom ">
    <a class="navbar-brand" href='../../AirPHP/Public/index.php?page=home'><img src="../App/Images/logo.PNG"   width="230" height="80" ></a>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" style="color:#0081C6;"   href="../../AirPHP/Public/index.php?page=news">Новости <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" style="color:#0081C6;"   href="../../AirPHP/Public/index.php?page=news">За нас<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <?php if (isset($_SESSION["username"])) :?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <label class="nav-link"style="color:#0081C6;"><?php echo 'Корсник: '.$_SESSION["username"];?></label>
                    </li>
                    <?php if( isset($_SESSION['role']) && $_SESSION['role'] == "Customer")  { ?>
                    <li class="nav-item active">
                        <label class="nav-link"style="color:#0081C6;">Мои билети</label>
                    </li>
                    <?php } ?>
                    <li class="nav-item active">
                        <label class="nav-link" style="color:#0081C6;"><?php echo 'Поени: '.$_SESSION["points"];?></label>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" style="color:#0081C6;"  href='../../AirPHP/App/Controllers/LogoutController.php'>Одјави се</a>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link " style="color:#0081C6;" href="../../AirPHP/Public/index.php?page=login">Најави се</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"  style="color:#0081C6;" href="../../AirPHP/Public/index.php?page=signup">Регистрирај се</a>
                    </li>
                </ul>
            <?php endif; ?>

        </div>

    </div>



</nav>
