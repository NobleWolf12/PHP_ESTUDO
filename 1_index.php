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

    <title>Formulario</title>
  </head>
  <body>
    <div class="container pt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <h1 class="text-center">Formulario</h1>

                <form action="1.php" method="POST" class="form-group">

                      <label for="usr">Name:</label>
                      <input type="text" class="form-control" id="usr" name="usr">
                    

                
                      <label for="email">E-mail:</label>
                      <input type="email" class="form-control" id="email" name="email">
                   

                
                      <label for="tipo">Selecione o tipo descrição:</label>
                      <select class="form-control" id="tipo" name="tipo">
                        <option></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                   

                
                      <label for="comment">Descrição:</label>
                      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                      <br>

                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
                <?php
                  if (isset($_SESSION['ENVIADO']) ){

                    if ($_SESSION['ENVIADO'] == true) {
                      echo '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Enviado com sucesso!</strong>
                    </div> '; 
                    }else{
                      echo '  <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Não enviado!</strong> <br> Campos invalidos
                    </div>';
                    }
                  }
                  unset($_SESSION['ENVIADO']);
                ?>

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