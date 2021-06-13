<?php
$d=date("s");
if($d>=30){
    echo '<p style="color:red;">30秒以上</p>';
}else{
    echo '<p style="color:blue;">29秒以下</p>';
}

echo '現在：'.$d.'秒';

?>