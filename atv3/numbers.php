<?php $page = 3; include "../../atvds2/baseHTML/base.php";
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
if ($n1 < $n2 ){
    echo "<p>A menor que B</p>";
}elseif($n1 > $n2){
    echo "<p>A maior que B</p>";
}else{
    echo "<p>Valores iguais</p> ";
}

include "../../atvds2/baseHTML/nxtpage.php";

include "../../atvds2/baseHTML/blwbody.html";
?>
