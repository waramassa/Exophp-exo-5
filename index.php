<?php
    // yes ou no
$answer = 'yes';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exo5</title>
</head>
<body>
    <?php
        if ($answer == 'yes') {
    ?>
    <p>Vous avez répondu 'oui' !</p>
    <?php
    }
    elseif ($answer == 'no') {
    ?>
    <p>Vous avez répondu 'non' !</p>
    <?php
    }
    else {
    ?>
    <p>Vous avez fait une erreur !!!</p>
    <?php } ?>
</body>
</html>