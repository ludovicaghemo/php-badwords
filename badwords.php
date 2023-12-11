<?php
    $paragraph  = $_GET['paragraph'];
    $censorship = $_GET['censorship'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Censored words</title>
    </head>
    <body>
        <!-- Stampo paragrafo -->
        <h2>Il tuo paragrafo</h2>
        <p>
            <?php 
            echo $paragraph;
            ?>
        </p>
        <!-- Stampo lunghezza paragrafo tramite strlen-->
        <h4>Lunghezza del paragrafo</h4>
        <p>
            <?php 
            echo strlen($paragraph);
            ?>
        </p>
        <!-- Sostituisco la parola selezionata tramite str_replace e stampo il nuovo paragrafo censurato -->
        <h2>Il paragrafo censurato</h2>
        <p>
            <?php
            $censored_paragraph = str_replace($censorship, '***', $paragraph);
            echo $censored_paragraph;
            ?>
        </p>
        <!-- Stampo la lunghezza del nuovo paragrafo tramite strlen-->
        <h4>Lunghezza del paragrafo censurato</h4>
        <p>
            <?php
            echo strlen($censored_paragraph);
            ?>
        </p>
    </body>
</html>