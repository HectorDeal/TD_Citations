<?php 
$citations = array("Celui qui sème l'injustice moissonne le malheur.","Il vaut mieux se disputer avec quelqu'un d'intelligent que parler à un imbécile","Offrir l'amitié à qui veut l'amour, c'est donner du pain à qui meurt de soif","Le trop de confiance attire le danger" , "Face. Tu dois faire face. Connaître le visage de ce qui va te faire peur.","La technologie peut être utilisée pour le meilleur ou le pire. Elle a transformé notre manière de vivre.", "Il ne faut avoir aucun regret pour le passé, aucun remords pour le présent, et une confiance inébranlable pour l'avenir", "La technologie est le trou du cul de la science.", "Si la technologie de communication est de plus en plus développée, pourquoi sommes-nous chaque jour plus sourds et plus muets ?");
// var_dump($citation);
$nb_citation = count($citations);

$random = rand(0, $nb_citation - 1);

$random_tableau = $citations[$random];
// var_dump($random_tableau)
// var_dump($random)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Citation</title>
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="window">
        <h1>Citation :</h1>
        <p><?= $random_tableau ?></p>
        <p>Rechargez pour en voir d'autres....</p>
    </div>
</body>
</html>