<?php
    session_start();
    include_once("connect.php");


    if (!$_POST) {
        header('Location: login_index.php');
        exit();
    }

    $usuario = trim( $_POST['usuario']);
    $senha = trim($_POST['passwd']);

    if ( $usuario == '' &&  $senha != '') {
        $_SESSION['erro'] = 1; 
        header('Location: login_index.php');
        exit();                     
    }elseif( $senha == '' &&  $usuario != '') {
        $_SESSION['erro'] = 2;
        header('Location: login_index.php');
        exit();   
    }elseif ( ( $usuario == '')  && ( $senha == '') ){
        $_SESSION['erro'] = 3;
        header('Location: login_index.php');
        exit();
    }

    $query = "select usuario,senha from usuarios where usuario='".$usuario."' and senha='".$senha ."';";
    $result = mysqli_query($link,$query);

    if ( mysqli_num_rows($result) > 0) {
        $aux = explode("@",$usuario);
        echo "<h1> Seja bem vindo ". $aux[0] ."</h1>";
        exit();
    }else{
        $_SESSION['ENVIADO'] = false;
        header('Location: login_index.php');
        exit();
    }


?>