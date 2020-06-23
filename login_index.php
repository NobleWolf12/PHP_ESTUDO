<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container pt-3">
        <div class="row d-flex justify-content-center align-items-end" style="height:500px;">
            <div class="col-8 ">
                <div class=" ">
                    <form action="login.php" method="POST" class="form-group p-2 ">

                        
                        <div class="container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS46t4HaVXE28g2KosQb0rGQIshseGS_fV_sA&usqp=CAU" class="rounded mx-auto d-block" height="150" width="200">
                        </div>
                      
                        <label for="usuario">USUARIO: </label>
                        <input name="usuario" type="text" class="form-control">
                        <label for="passwd">SENHA: </label>
                        <input name="passwd" type="password" class="form-control">

                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>


                    </form>
                    <?php
                      if (isset($_SESSION['erro'])) {
                        $tipo= "";
                        switch ($_SESSION['erro']) {

                          case 3:
                            $tipo = "Usuario e senha não inseridos";
                            break;
                          case 2:
                            $tipo = "Senha não inserido";
                            break;
                          case 1:
                            $tipo = "Usuario não inserido";
                            break;
                        }
                        
                      }elseif (isset($_SESSION['ENVIADO'])) {
                        if ($_SESSION['ENVIADO'] == false) {
                          $tipo = "Usuario não cadastrado";
                        }
                      }
                      if (isset($tipo)) {
                        echo'<div class="alert alert-danger">
                              <strong>Erro!</strong><br>'.$tipo.'
                              </div>';
                      }
                      session_destroy();
                        ?>
                </div>
            </div>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>