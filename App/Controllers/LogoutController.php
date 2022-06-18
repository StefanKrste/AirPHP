<?php

    session_start();
    session_destroy();
    header('Location: ../../Public/index.php?page=home');
    Exit();

?>