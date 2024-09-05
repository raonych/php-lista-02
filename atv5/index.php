<?php $page = 5; include "../../php-lista-02/baseHTML/base.php"?>

<h1 class="title">Atividade 5 </h1>
<div class="desc">Esse progama é um jogo de jokenpo contra o computador. você irá fornecer seu nome e escolher uma jogada, dependendo da jogada do computador que é um valor aleatório recebera uma mensagem te informando se você venceu ou não.</div>
<form class="button-wrapper" action="home.php" method="post">
    <label for="player" class= "player-name"> Insira seu nome: </label>
    <input type="text" name="player"> </input>
    <input class="btn" type="submit"value="enviar"/>
</form>
<?php include "../../php-lista-02/baseHTML/blwbody.html"?>