<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>



<div class="container" style="padding: 20px; box-shadow: 0 2px 5px black; margin-top: 50px">
  <form name="tabuada" method="post">
    <h1>Digite um número para ver a tábuada dele.</h1><br><br>
    <input type="number" class="form-control" name="n1" placeholder="Digite seu número..." style="width: 25%;">
    <input type="submit" value="mostrar tábuada" class="btn btn-primary" style="margin: 20px 0;"><br>
  </form>

  <?php

//primeiro definimos uma condição com o if para guardar o valor do n1
  if (isset($_POST['n1'])) {
      $n1 = $_POST['n1'];//guarda valor de n1 em uma variavel

      //em seguida comparamos n1 (caso seja maior ou igual a 1 o cálculo será feito)
      if ($n1 >= 1) {

        //estrutura de repetiação para mostrar a tábuada de 1 a 10 (podendo ser aumentada)
          for ($i=1; $i<=10; $i++) {
              $result = $n1 * $i;
              echo"$n1 x $i = $result<br>";//esse echo apresenta na tela cada linha da tábuada de 1 a 10
          }
      }

      //condição caso o número digitado seja igual a zero
      if (($_POST['n1']) == 0) {
          echo"<br><br><br> O número não pode ser 0.";
      }

      //condição para caso o número seja negativo
      if (($_POST['n1']) <= -1) {
          echo"<br><br><br> O número não pode ser negativo";
      }
  }

  ?>
</div>

</body>
</html>