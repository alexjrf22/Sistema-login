<?php

    session_start();
    ob_start();

    unset ($_SESSION["nome"], $_SESSION["id"]);

    $_SESSION['msg'] = "<p class='sucess'>Deslogado com sucesso!</p>";

    header("Location: index.php");

