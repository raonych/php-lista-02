<?php $page = 4; include "../../atvds2/baseHTML/base.php"; ?>

<h1 class="title">Atividade 2 </h1>
<div class="desc">Esse progama verifica se é possivel formar um triângulo com os valores fornecidos e se sim, ele informa qual triângulo é possivel formar.</div>

    <form action="main.php" method="post">
        <label for="num">Insira o valor referente ao lado A:</label>
        <input type="text" name="a">
        <label for="num">Lado B:</label>
        <input type="text" name="b">
        <label for="num">Lado C:</label>
        <input type="text" name="c">
        <input class="btn" type="submit" value="enviar"/>
    </form>
    <?php include "../../atvds2/baseHTML/blwbody.html"?>