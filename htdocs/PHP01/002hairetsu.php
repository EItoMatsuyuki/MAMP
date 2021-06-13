<html>
<head>
    <meta charset="utf-8">
    <title>配列</title>
</head>
<body>

<!-- 以下にPHPを記述 -->
<?php

//配列
$city_names = array('新宿','渋谷','池袋');

// echo $city_names;

var_dump($city_names); //配列の中身を見たい時はvar_dunp
echo "<br>";

// 配列に後からデータを追加
array_push($city_names,"原宿");

var_dump($city_names);

echo "<br>";

echo $city_names[0];

echo "<br>";

echo $city_names[2];

?>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>