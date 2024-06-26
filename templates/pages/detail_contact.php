<?php

// Template de page : mettre en forme une fiche de détail d'un contact
// paramètres :
//    le contact" brut" : pbjet de la calse contact avec toutes ses informations à jour (chargé)
//   $contact : objet contact à afficher


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $contact->get("nom") ?> <?= $contact->get("prenom") ?></title>
</head>
<body>
    <h1>Fiche contact</h1>
    <p><b>Nom</b> : <?= $contact->get("nom") ?></p>
    <p><b>Prénom</b> : <?= $contact->get("prenom") ?></p>
    <p><b>Email</b> : <?= $contact->get("email") ?></p>
    <a href="afficher_form_modif_locataire.php?id=<?= $contact->id() ?>"><button>Modifier</button></a>
</body>
</html>