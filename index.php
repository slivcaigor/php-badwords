<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/png">
    <title>PHP Badwords</title>
</head>

<body>
    <section>
        <div class="ms_wrapper">
            <h1>
                <?php
                $title = 'WRAITH <span>KRYPTOS</span>';
                echo $title;
                ?>
            </h1>
            <h2>
                <?php
                $subheading = 'La Casa inglese ha presentato la Rolls-Royce Wraith Kryptos Collection, edizione speciale della
                lussuosissima vettura britannica';
                echo $subheading;
                ?>
            </h2>
            <p>
                <?php
                $description = 'È già esistita al mondo una macchina capace di trasmettere messaggi in codice e determinare per lungo
                tempo la superiorità dei suoi inventori: il suo nome era Enigma. In questo caso però non parliamo di uno
                strumento di guerra, ed i codici sono nascosti in un’auto a dir poco spettacolare.';
                $badword = str_replace($_GET['badword'], "***", $description);
                echo $badword . "<br>";
                echo "Lunghezza descrizione: <span style='color: yellow'>" . strlen($description) . "</span><br>";
                ?>
            </p>
        </div>
    </section>
</body>

</html>