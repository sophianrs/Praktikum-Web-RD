<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['operator'])){
$n = $_POST['n'];
}

    function bilPrima($n){
        for($i=1; $i<=$n; $i++){
            $hitung = 0;
            for($j=1; $j<=$i; $j++){
                if($i % $j == 0){
                    $hitung++;
                }
            }
            if($hitung == 2){
                echo $i.', ';
            }
        }
    }


$n = 50;
?>
<?php 
echo "Nilai bilangan prima adalah : "; 
?><br><br>

<?php bilPrima($n);?>

<!-- <label for="n">Masukkan angka : </label>
<input type="number" name="n" id="n" value="<?php echo $n;?>">


<input type="submit" name="operator" id="operator">

<?php if(isset($_POST['operator'])){ ?>
    <input type="text" value="<?php echo "prima($n)"; ?>" class="bil">
<?php }else{ ?>
	<input type="text" value="0" class="bil">
<?php } ?> -->

</body>
</html>

