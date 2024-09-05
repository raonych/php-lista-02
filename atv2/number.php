<?php $page = 2; include "../../php-lista-02/baseHTML/base.php";
    $n = $_POST["n"];
    if ($n % 2 == 0 ){
        echo "<p>Par</p>";
    }else{
        echo "<p>Ímpar</p>";
    };

    include "../../php-lista-02/baseHTML/nxtpage.php";

    include "../../php-lista-02/baseHTML/blwbody.html";
    ?>
