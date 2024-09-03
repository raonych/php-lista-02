<!DOCTYPE html>
<html lang="pt-BR">
<?php $player = $_POST["player"];
$score = 0;
$cpuscore = 0;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family = Roboto: wght @ 700 & display = swap " rel=" stylesheet ">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Joquempo atividade 5</title>
</head>
<body>
        <header class="header">
        <form action="jokenpo.php" method="post">   
        </header>
        <section class="batlefield-container">  
            <div class="button-wrapper">
                <input type="hidden" name="player" value="<?php echo $player?>">
                <input type="hidden" name="playerscore" value="<?php echo $score = 0;?>">
                <input type="hidden" name="cpuscore" value="<?php echo $cpuscore = 0;?>">
                <button type="submit" name="jogada" value="1" class="button-move button-stone-1">Pedra</button>
                <button type="submit" name="jogada" value="2" class="button-move button-paper-1">Papel</button>
                <button type="submit" name="jogada" value="3" class="button-move button-scissors-1">Tesoura</button>
            </div>
            </form>
            <div class="batlefield">
                <div class="field field-1"></div>
                <span class="vs-separation vs-separation--big">VS</span>
                <div class="field field-2"></div>
            </div>
        </section>
        <div class="button-bottom-wraper">
            <button class="button-move button-reset">Resetar</button>
        </div>
</body>
</html>