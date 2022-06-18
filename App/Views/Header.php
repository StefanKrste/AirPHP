<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>AirPHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand" href='../../AirPHP/Public/index.php?page=home'>AirPHP</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Новости <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <?php if (isset($_SESSION["username"])) :?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <label class="nav-link"><?php echo 'Корсничко име: '.$_SESSION["username"];?></label>
                    </li>
                    <li class="nav-item active">
                        <label class="nav-link"><?php echo 'Поени: '.$_SESSION["points"];?></label>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href='../../AirPHP/App/Controllers/LogoutController.php'>Одјави се</a>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../AirPHP/Public/index.php?page=login">Најави се</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../../AirPHP/Public/index.php?page=signup">Регистрирај се</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>

