<?php  $page = 4; include "../../atvds2/baseHTML/base.php";
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        if($a == $b && $b == $c){
            echo "<img src=\"images/equilatero.png\">";
        }elseif($a != $b && $b != $c && $a != $c){
            echo "<img src=\"images/escaleno.png\">";
        }else{
            echo "<img src=\"images/isosceles.png\">";
        };
    }else{ 
        echo "os valores fornecidos não formam um triângulo válido.";

    };
        
    include "../../atvds2/baseHTML/nxtpage.php";
    
    include "../../atvds2/baseHTML/blwbody.html";
    
    ?>  
