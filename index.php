<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>

    <?php

        $text = 'Testo di prova per il primo esercizio con php aggiungo ancora qualche parola ecco fatto';
        $badword = $_GET['badword'];
        $replace = '***';
        $censored_string = str_replace($badword, $replace, $text);
        $breakRule = '<br>';

        echo('Paragrafo originale:');
        echo($breakRule);
        echo($text);
    
        echo($breakRule);
        echo($breakRule);

        echo('Lunghezza paragrafo originale: ');
        echo(strlen($text));

        echo($breakRule);
        echo($breakRule);


        echo('Paragrafo censurato:');
        echo($breakRule);
        echo($censored_string);
    ?>

</h1>

    
</body>
</html>