<?php

// フォームから送られてきたデータを取得し変数に代入
$number=$_POST["number"];
$name = $_POST["name"];
$mail = $_POST["mail"];
$question1=$_POST["question1"];
$question2=$_POST["question2"];
$question3=$_POST["question3"];

// XSS対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

//文字列作成（日付）
$date = date("Y-m-d H:i:s");

$datas=array($number,$date,$name,$mail,$question1,$question2,$question3);

//.txt fileにデータを保存する処理
$file = fopen("data.csv","a+"); //対象のファイルを開く

// var_dump(fputcsv($file,$datas));これでもできたが

fputcsv($file,$datas); //csvに配列で挿入

fclose($file); //ファイルを閉じる

?>

<html>
<head>
    <meta charset="utf-8">
    <title>WRITE</title>
</head>

<body>

    <ul>
        <li> NO：<?= h($number) ?> </li>
        <li> 日付：<?= h($date) ?> </li>
        <li> お名前：<?= h($name) ?> </li>
        <li> Mail：<?= h($mail) ?> </li>
        <li> 身長：<?= h($question1) ?> </li>
        <li> 体重：<?= h($question2) ?> </li>
        <li> 趣味：<?= h($question3) ?> </li>
    </ul>

<ul>
    <li><a href="read.php">readへ</a></li>
</ul>
</body>
</html>