<?php
    $string="Tarapia tapioco come se fosse antani con la supercazzola prematurata, con il Lorem a destra."." ".$_GET['word'];
    $string2 = str_replace($_GET['word'],"***",$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo " ". $string . " "?> !!!</p>

    <h2>Censurato</h2>
    <p><?php echo " ". $string2 ?></p>
</body>
</html>
