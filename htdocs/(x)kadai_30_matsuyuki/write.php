<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_POST["name"];
$mail = $_POST["mail"];
$question=$_POST["question"];
// XSS対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

//文字列作成（日付）
$date = date("Y-m-d H:i:s");

$str = '日付：'.$date.'/'.'名前：'.$name.'/'.'メール：'.$mail.'/'.'質問：'.$question;

//.txt fileにデータを保存する処理
$file = fopen("data.csv","a"); //対象のファイルを開く

fwrite($file,$str."\n");//ファイルにデータ書き込み

fclose($file); //ファイルを閉じる

?>

<html>
<head>
    <meta charset="utf-8">
    <title>WRITE</title>
</head>

<body>

    <ul>
        <li> お名前：<?= h($name) ?> </li>
        <li> Mail：<?= h($mail) ?> </li>
        <li> 質問：<?= h($question) ?> </li>
    </ul>

<ul>
    <li><a href="read.php">readへ</a></li>
</ul>
</body>
</html>