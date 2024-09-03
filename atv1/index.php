<?php $page = 1; include "../../atvds2/baseHTML/base.php"?>

<h1 class="title">Atividade 1 </h1>
<div class="desc">Esse progama verifica se o número fornecido é negativo, positivo ou igual a zero.</div>

    <form action="numbers.php" method="post">
        <label for="num">Insira um número:</label>
        <input type="text" name="n">
        <input class="btn" type="submit" value="enviar"/>
    </form>

    
<?php include "../../atvds2/baseHTML/blwbody.html"?>