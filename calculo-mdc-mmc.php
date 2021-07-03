<!-- 1) Faça uma página HTML com campos de formulário em que o usuário entre com dois valores 
m e n que deverão ser submetidos ao servidor via método GET. Você deve fazer um script php 
que recupere esses dois parâmetros m e n e devolva para o usuário o MDC e o MMC desses dois 
números, você pode usr o algoritmo de Euclides para calcular o MDC. -->

<?php
  function mdc($x ,$y) {
    $max = max($x,$y);
    $min = min($x,$y);
  
    if ($max % $min == 0) {
      return $min;
    } else {
      return mdc($min, ($max % $min));
    }
  }

  function mmc($x, $y){
    return (($x * $y) / (mdc($x, $y)));
  }

  if ($_GET) {
    echo "Cálculo mdc".mdc($_GET["m"], $_GET["n"]);
    echo "<br> Cálculo mmc".mmc($_GET["m"], $_GET["n"]);

    echo "<br>O valor de m: " . $_GET["m"];
    echo "<br>O valor de n é: " . $_GET["n"];
  }
?>

<form method="get">
  M: <input type=text name=m><br>
  N: <input type=text name=n><br>
  <input type=submit value="OK">
</form>
