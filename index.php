<?php
    $randNumName = rand(1000, 9999);
    $allChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randLetter = rand(0, 25);
    $firstLetterBot = $allChars[$randLetter];
    $randLetter = rand(0, 25);
    $secondLetterBot = $allChars[$randLetter];
    $nameBot = "$firstLetterBot$secondLetterBot-$randNumName";
    echo "Salut, humain. Je suis $nameBot.";
    echo '<br>';
    $timeZone = new DateTimeZone('Europe/Paris');
    $dateTime = new DateTime('now', $timeZone);
    $date = $dateTime->format('d m Y');
    $clock = $dateTime->format('H:m:s');
    echo "Nous sommes le $date, il est $clock.";
    echo '<br>';
    $randNum = rand(1, 10);
    $isPair = "impair";
    if($randNum % 2 == 0){
        $isPair = "pair";
    }
    echo "J'ai choisi le nombre $randNum. C'est un nombre $isPair.";
    echo '<br>';
    $reverseName = strrev($nameBot);
    echo "Mon nom à l'envers s'écrit $reverseName. Ah. Ah. Ah.";
    echo '<br>';
    $randDiabolik = rand(1, 3);
    if($randDiabolik == 1){
        echo "Extermination ! Extermination !";
    }else{
        echo "Vous voulez un café ?";
    }
    echo '<br>';
    $subconscienceNbr = rand(1, 1000);
    $i = 500;
    while($i != $subconscienceNbr){
        if($subconscienceNbr < $i){
            $i--;
        }else{
            $i++;
        }
    }
    echo "J'ai trouver le nombre généré aléatoirement! C'est le $i!";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Factory</title>
</head>
<body>
    
</body>
</html>