<?php $page = 3; include "../../atvds2/baseHTML/base.php"; ?>

<h1 class="title">Atividade 3 </h1>
<div class="desc">Esse progama verifica se o valor A é menor ou maior que o valor B.</div>

    <form action="numbers.php" method="post">
        <label for="num">Insira o valor A:</label>
        <input type="text" name="n1">
        <label for="num">Insira o valor B:</label>
        <input type="text" name="n2">
        <input class="btn" type="submit" value="enviar"/>
    </form>
    <?php include "../../atvds2/baseHTML/blwbody.html"?>