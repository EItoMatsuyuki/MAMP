<?php

$d=date("s");
if($d<=19){
    echo '<p style="color:white;background-color:red;">'.$d.'秒</p>';
}elseif($d>=20 && $d<=39){
    echo '<p style="color:black;">'.$d.'秒</p>';
}elseif($d>=40 && $d<=59){
    echo '<p style="color:white;background-color:blue;">'.$d.'秒</p>';
}

?>