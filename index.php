<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <form action="badwords.php">
        <div>
            <label for="paragraph">Inserisci qui il tuo paragrafo</label>
            <input type="text" id="paragraph" name="paragraph">
        </div>
        
        <div>
            <label for="censorship">Inserisci qui la parola che vuoi censurare</label>
            <input type="text" id="censorship" name="censorship">
        </div>
        
        <button type="submit">Censura</button>
    </form>
</body>
</html>