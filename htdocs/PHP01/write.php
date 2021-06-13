<?php

//文字列作成（日付）
$str = date("Y-m-d H:i:s");

//.txt fileにデータを保存する処理
$file = fopen("data/data.txt","a"); //対象のファイルを開く

fwrite($file,$str."\n");//ファイルにデータ書き込み

fclose($file); //ファイルを閉じる

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>