<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->
<?php

echo 'hello world';

//変数

$int_age=10; //数値型
$str_age="22";//文字列型

echo $int_age;

echo "<br>";

echo $str_age;
echo "<br>";

//四則演算
$total_age=$int_age+$str_age;
echo $total_age;
echo "<br>";

//結合演算子
$total_age2 = $int_age.$str_age;
echo $total_age2;
echo "<br>";


//制御構文（if文とfor文）jsと同じ
//簡単なおみくじを実装

//ランダム整数生成 rand(min,max);
$num=rand(1,2);

if($num==1){
    echo "あたり";
}else{
    echo "ハズレ";
};

// for($i==1;$i<7;$i++){
// function(){
//     echo $i;
//     echo $count="回目";
//     echo $total=$i+$count;
//     echo $total;
// };

?>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>