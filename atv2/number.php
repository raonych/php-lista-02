<?php $page = 2; include "../../atvds2/baseHTML/base.php";
    $n = $_POST["n"];
    if ($n % 2 == 0 ){
        echo "<p>Par</p>";
    }else{
        echo "<p>Ímpar</p>";
    };

    include "../../atvds2/baseHTML/nxtpage.php";

    include "../../atvds2/baseHTML/blwbody.html";
    ?>
