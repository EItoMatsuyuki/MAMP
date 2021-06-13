<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_GET["name"];
$mail = $_GET["mail"];


?>

<html>
    <head>
        <meta charset="utf-8">
        <title>GET練習（受信）</title>
    </head>
<body>

    <ul>
        <li> お名前：<?= $name ?> </li>
        <li> Mail：<?= $mail ?> </li>
    </ul>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>