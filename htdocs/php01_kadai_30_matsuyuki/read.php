<?php

// ファイルを開く
$file = fopen("data.csv","r");

// ファイル内容を1行ずつ読み込んで出力

$data = fgetcsv($file); //csvから配列でデータ取得

echo '<table border="1">
      <tr>
      <th>NO</th>
      <th>日時</th>
      <th>名前</th>
      <th>EMAIL</th>
      <th>身長</th>
      <th>体重</th>
      <th>趣味</th>
      </tr>';

      while($data = fgetcsv($file)){
        echo '<tr>';
        // echo '<td>'.$data[0].'</td>';
        // echo '<td>'.$data[1].'</td>';
        // echo '<td>'.$data[2].'</td>';
        // echo '<td>'.$data[3].'</td>';
        // echo '<td>'.$data[4].'</td>';
        // echo '<td>'.$data[5].'</td>';
        // echo '<td>'.$data[6].'</td>';
        for($i = 0; $i < count($data); $i++){
          echo '<td>'.$data[$i].'</td>';
        }
        echo '</tr>';
      }
echo '</table>';
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