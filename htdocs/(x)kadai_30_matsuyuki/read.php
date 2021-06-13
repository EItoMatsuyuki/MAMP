<?php

// ファイルを開く
$file = fopen("data.csv","r");

// ファイル内容を1行ずつ読み込んで出力
while($str = fgets($file)){
    echo nl2br($str);
}

// ファイルを閉じる

fclose($file);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>readファイル</title>
</head>


<ul>
    <li><a href="post.php">postへ戻る</a></li>
</ul>
</html>