<?php
include "operacao.php";

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

if ($operacao == '+') {
    $resultado = adição($numero1, $numero2);
} else if ($operacao == '-'){
    $resultado = subtração($numero1, $numero2);
} else if ($operacao == '*'){
    $resultado = multiplicação($numero1, $numero2);
} else if ($operacao == '/'){
    $resultado = divisão($numero1, $numero2);
}
echo "RESULTADO: " . $resultado;
?>


