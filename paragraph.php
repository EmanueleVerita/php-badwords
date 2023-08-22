
<?php

$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];
$censored = str_replace( $badWord , '***' , $paragraph );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <h2>
            Paragrafo originale
        </h2>
        <p>
            <?php echo $paragraph; ?>
        </p>
        <p>
            Lunghezza paragrafo <?php echo strlen($paragraph); ?>
        </p>
    </div>

    <div>
        <h2>
            Parola de censurare
        </h2>
        <p>
            <?php echo $badWord; ?>
        </p>
        <p>
            Lunghezza paragrafo <?php echo strlen($badWord); ?>
        </p>
    </div>

    <div>
        <h2>
            Paragrafo censurato
        </h2>
        <p>
            <?php echo $censored; ?>
        </p>
        <p>
            Lunghezza paragrafo Censurato <?php echo strlen($censored); ?>
        </p>
    </div>
</body>
</html>