<?php
  $valor1 = $_GET['txtValor1'];
  $valor2 = $_GET['txtValor2'];
  $operacion = 0;

  echo "<br>Calculadora Básica", $nombre;
  echo "<br>Valor 1", $valor1;
  echo "<br>Valor 2", $valor2;

  if (isset($_GET['$btnSuma'])) {
    $operacion = $valor1 + $valor2;
    echo "<br>La suma es : ", $operacion;
  }

  if (isset($_GET['$btnResta'])) {
    $operacion = $valor1 - $valor2;
    echo "<br>La resta es : ", $operacion;
  }

  if (isset($_GET['$btnMult'])) {
    $operacion = $valor1 * $valor2;
    echo "<br>La multiplición es : ", $operacion;
  }

  if (isset($_GET['$btnDiv'])) {
    $operacion = $valor1 / $valor2;
    echo "<br>La división es : ", $operacion;
  }
?>