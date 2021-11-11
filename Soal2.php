<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mengurutkan</title>
</head>
<body>
<?php

$String = array(" larine", " aduh", " qifuat", " toda", " anevi", " samid", " kifuat");

function sortingString (&$String){
        sort($String);
}

?>

<?php echo "Berikut data yang belum diurutkan : " ;?><br><br>

<?php
$i = 0;
foreach($String as $data){
    if($i < count($String)-1){
        echo $data. ", ";
    }else{
        echo $data. ". ";
    }
    $i++;
}

?>
<br><br><br><br>

<?php echo "Berikut data yang telah diurutkan : " ;?><br><br>
<?php sortingString($String); ?>

<?php
$i = 0;
foreach($String as $data){
    if($i < count($String)-1){
        echo $data. ", ";
    }else{
        echo $data. ". ";
    }
    $i++;
}

?>
</body>
</html>
