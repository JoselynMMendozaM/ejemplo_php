<?php
if (isset($_GET['txtValor1']) && isset($_GET['txtValor2'])) {
    $valor1 = $_GET['txtValor1'];
    $valor2 = $_GET['txtValor2'];
    $resultado = "";

    if (isset($_GET['btnSuma'])) {
        $resultado = $valor1 + $valor2;
    } elseif (isset($_GET['btnResta'])) {
        $resultado = $valor1 - $valor2;
    } elseif (isset($_GET['btnMult'])) {
        $resultado = $valor1 * $valor2;
    } elseif (isset($_GET['btnDiv'])) {
        if ($valor2 != 0) {
            $resultado = $valor1 / $valor2;
        } else {
            $resultado = "Error: División por cero.";
        }
    }

    echo "<h1>Resultado: $resultado</h1>";
}
?>
