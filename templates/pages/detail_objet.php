<?php

// Template affichant le détail d'un objet quelquconque du modlèe de données

// paramètres:
//  $objet : objet à afficher

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1><?= $objet->name() ?></h1>
    <?php // affichage des champs 
    // Pour cahque champ, on l'affiche
    foreach($objet->getFields() as $fieldName => $field) {
        ?>
        <p><b><?= $field->libelle() ?></b>: <?= $field->html() ?></p>
        <?php
    }
    ?>  
</body>
</html>
