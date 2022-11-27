<?php 

if(isset($_GET['paragrafo']) && $_GET['paragrafo'] != ''){
    $paragrafo = $_GET['paragrafo'];

} else {
    $paragrafo = "Non è stato inserito alcun testo";
};

$parolaCensurata = $_GET['parolaDaCensurare'];

$versioneCensurata = str_replace($parolaCensurata, "*** ", $paragrafo)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container margin-top">
        <h2>Ecco il testo originale:</h2>
        <p>
            <?php 
                echo $paragrafo;
            ?>
        </p>
        <h3>Lunghezza in caratteri:</h3>
            <?php 
                echo strlen($paragrafo);
            ?>        

        <h2>Versione censurata:</h2>
        <p>
            <?php 
                echo $versioneCensurata;
            ?>
        </p>
        <h3>Lunghezza in caratteri:</h3>
            <?php 
                echo strlen($versioneCensurata);
            ?>        
    </div>
    
</body>
</html>