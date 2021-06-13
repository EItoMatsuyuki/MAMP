<?php
function g($value){
    return htmlspecialchars($value, ENT_QUOTES);
}
$name=$_POST["name"];
$age=$_POST["age"];

var_dump($_POST);

function om(){
$num=rand(1,5);

if($num==1){
    echo "大吉";
}
if($num==2){
    echo "中吉";
}
if($num==3){
    echo "吉";
}
if($num==4){
    echo "小吉";
}
if($num==5){
    echo "凶";
}
}

?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p><?= g($name);?>さん</p>
        <p><?= g($age);?>歳</p>
        <p><?= om();?></p>
    </body>
</html>
