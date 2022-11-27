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
    <h1>Censuratore automatico</h1>

    <div class="container">
        <h2>Inserisci qui il tuo testo:</h2>
        <form action="paragrafo.php" method="GET">
            <textarea name="paragrafo" id="paragrafo" cols="30" rows="10"></textarea><br>

            <h2>Inserisci ora la parola da censurare:</h2><br>
            <input type="text" name="parolaDaCensurare"><br>
            <button type="submit">Invia</button>
        </form>
    </div>
</body>
</html>