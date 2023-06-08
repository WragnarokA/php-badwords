<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Bad Words</title>


</head>

<header></header>


<main>

    <h1>CENSURA PAROLA</h1>
    <div class="container">
        <div class="censura">
            <form action="censura.php" method="get">
                <label for="paragrafo">Testo da verificare</label>
                <textarea name="paragrafo" id="paragrafo" cols="30" rows="10" placeholder="Inserice il testo"></textarea>

                <label for="parola">Parola da censurare</label>
                <input type="text" name="parola" id="parola" placeholder=" Scrivi la parola da censurare ">

                <button type="submit">invia</button>
                <button type="reset">reset</button>


            </form>


        </div>


    </div>


</main>


<footer></footer>

</html>