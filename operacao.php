<?php
function adição($numero1, $numero2){
    return $numero1 + $numero2;
}
function subtração($numero1, $numero2){
    return $numero1 - $numero2;
}
function multiplicação($numero1, $numero2){
    return $numero1 * $numero2;
}
function divisão($numero1, $numero2){
    if($numero2 <= 0){
        echo "NÃO É POSSIVEL DIVIDIR POR 0. DIGITE OUTRO NÚMERO <br><br><br>";
}   else {
    return $numero1 / $numero2;
}
}
?>