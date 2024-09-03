<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https: //fonts.googleapis.com/css2? family = Roboto: wght @ 700 & display = swap " rel=" stylesheet ">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Joquempo</title>
</head>

<body>
        <header class="header">
        <?php
        $playerscore = $_POST["playerscore"];
        $cpuscore = $_POST["cpuscore"];
        $n = rand(1,3);
        $player = $_POST["player"];
        $jogada = $_POST["jogada"];
                if ($jogada == $n){
                    echo "<h1 class=\"winner-title\">Empate</h1>";
                }elseif($jogada == 1 && $n == 3 or $jogada == 2 && $n == 1 or $jogada == 3 && $n == 2){
                    echo "<h1 class=\"winner-title\">" .$player ." venceu!</h1>";
                        $playerscore ++;
                }else{
                    echo "<h1 class=\"winner-title\">CPU venceu!</h1>";
                    $cpuscore ++;
                };
        ?>
        <div class="scoreboard-box">
            <span class="player-name player-name-1"><?php echo $player?></span>
            <strong class="scoreboard scoreboard-1"><?php echo $playerscore; ?></strong>
            <span class="vs-separation">VS</span>
            <strong class="scoreboard scoreboard-2"><?php echo $cpuscore; ?></strong>
            <span class="player-name player-name-2">CPU</span>
        </div>
        
        </header>
        <section class="batlefield-container">  
            <form class="button-wrapper" action="jokenpo.php" method="post">
                <input type="hidden" name="player" value="<?php echo $player?>">
                <input type="hidden" name="playerscore" value="<?php echo $playerscore;?>">
                <input type="hidden" name="cpuscore" value="<?php echo $cpuscore;?>">
                <button type="submit" name="jogada" value="1" class="button-move button-stone-1">Pedra</button>
                <button type="submit" name="jogada" value="2" class="button-move button-paper-1">Papel</button>
                <button type="submit" name="jogada" value="3" class="button-move button-scissors-1">Tesoura</button>
            </form>
            <div class="batlefield">
                <div class="field field-1"><?php 
                            if($jogada == "1"){
                                echo "<img style = \"width=\"80%\"\" \"heigth=\"80%\"\" src=\"images/stone.jpg\">";
                            } elseif($jogada =="2"){
                                echo "<img style = \"width=\"80%\"\" \"heigth=\"80%\"\" src=\"images/paper.jpg\">";
                            } else{
                                echo "<img style = \"width=\"80%\"\" \"heigth=\"80%\"\" src=\"images/scissors.jpg\">";
                            }
                        ?></div>
                <span class="vs-separation vs-separation--big">VS</span>
                <div class="field field-2"><?php 
                if($n == 1){
                    echo "<img style = \"width=\"80%\"\" \"heigth=\"80%\"\" src=\"images/Lstone.jpg\">";
                } elseif($n == 2){
                    echo "<img style = \"width=\"80%\"\" \"heigth=\"80%\"\" src=\"images/Lpaper.jpg\">";
                } else{
                    echo "<img style = \"width=\"80%\"\" \"heigth=\"80%\"\" src=\"images/Lscissors.jpg\">";
                }
                
                ?></div>
            </div>
        </section>
            <form action="home.php" method="post">
            <input type="hidden" name="player" value="<?php echo $player?>">
            <button type="submit" class="button-move button-reset">Resetar</button>
            </form>
</body>

</html>
