<?php

// POSTデータ取得
$name = $_POST["name"];
$email = $_POST["email"];

// 申込時間取得
$date = date("Y/m/d H:i:s");


// ファイルを読み込む
$file = fopen("data/data.txt","a");
// ファイルに書き込む
fwrite($file,$date." ".$name." ".$email."\n");
// ファイルを閉じる
fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();




?>