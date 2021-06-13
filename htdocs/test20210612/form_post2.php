<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}
$name=$_POST["name"];
$mail=$_POST["mail"];
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p><?= h($name);?></p>
        <p><?= h($mail);?></p>
    </body>
</html>
