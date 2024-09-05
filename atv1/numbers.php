<?php $page = 1; include "../../php-lista-02/baseHTML/base.php";
 
$n = $_POST["n"];
if ($n < 0 ){
    echo "<p>Valor Negativo</p>";
}elseif($n == 0){
    echo "<p>Igual a Zero</p>";
}else{
    echo "<p>Valor Positivo</p>";
};

include "../../php-lista-02/baseHTML/nxtpage.php";

include "../../php-lista-02/baseHTML/blwbody.html"
?>
