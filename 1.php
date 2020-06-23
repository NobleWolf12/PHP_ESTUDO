<?php
    session_start();

    if(! $_POST) {
        header('Location: 1_index.php');
        exit();
    }

    $nome = $_POST['usr'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $descrição = $_POST['comment'];

    if (!empty(trim($nome)) && !empty(trim($email)) && !empty(trim($tipo)) && !empty(trim($descrição)))  {
        $_SESSION['ENVIADO'] = TRUE;
        header('Location: 1_index.php');
        exit();
    }else {
        $_SESSION['ENVIADO'] = FALSE;
        header('Location: 1_index.php');
        exit();
    }




?>