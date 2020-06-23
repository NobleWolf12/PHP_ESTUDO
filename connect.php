<?php
     $servername = "localhost";
     $username="root";
     $password="";
     
     $link = mysqli_connect($servername, $username, $password) or die('Could not connect: ' . mysqli_error($link));
     mysqli_select_db($link,'clientes_db') or die('Could not select database');
?>