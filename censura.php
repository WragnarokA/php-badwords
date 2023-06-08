<?php

$paragrafo = $_GET["paragrafo"];
$parolaDaCensura = $_GET["parola"];
$censura = "***";
$paragrafoCensurato = str_ireplace($parolaDaCensura, $censura, $paragrafo);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Bad Words</title>

</head>

<body>
    <main>
        <h1>PAROLA CENSURATA</h1>
        <div class="container">
            <div class="censura">
                <form action="censura.php" method="get">
                    <label for="paragrafo">Testo da verificato</label>
                    <h2><?php echo $paragrafoCensurato; ?></h2>



                </form>
            </div>
        </div>

    </main>
</body>







</html>