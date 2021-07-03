<!-- 2) Faça uma página HTML com campos de formulário em que o usuário entre 
com dois valores m e n que deverão ser submetidos ao servidor via método 
POST. Você deve fazer um script php que recupere esses dois parâmetros m 
e n e armazene em um array m múltiplos de n e exibir esse array pro usuário. -->


<?php
  if ($_POST) {
    echo "O valor de n é: ".$_GET["n"];
    echo "<br>Os numeros são múltiplos são: ";

    foreach($_POST["m"] as $numero) {
      if ($numero % $_POST["n"] == 0) {
       echo "<br>".$numero; 
      }
    }
  }
?>

<form method="post">
  M: <input type=text name=m[]><br>
  N: <input type=text name=n><br>
  <input type=submit value="OK">
</form>
