<?php

$table= array(
    array("a1","a2"),
    array("b1","b2"),
    array("c1","c2")
);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title></title>
</head>
<body>

<table border=1>
    <?php foreach($table as $row){ ?>
    <tr>
        <?php foreach($row as $cel){ ?>
            <td><?= $cel?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>

</body>
</html>