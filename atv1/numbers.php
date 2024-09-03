<?php $page = 1; include "../../atvds2/baseHTML/base.php";
 
$n = $_POST["n"];
if ($n < 0 ){
    echo "<p>Valor Negativo</p>";
}elseif($n == 0){
    echo "<p>Igual a Zero</p>";
}else{
    echo "<p>Valor Positivo</p>";
};

include "../../atvds2/baseHTML/nxtpage.php";

include "../../atvds2/baseHTML/blwbody.html";
?>
