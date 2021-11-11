<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>

<?php
// if(isset($_POST['operator'])){
//     $a = $_POST['a'];
//     $b = $_POST['b'];
//     $hasil = '';
// }

function tambah($a, $b){
    // if(isset($_POST['tambah'])){
        $hasil = $a + $b;
        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil : ".$hasil;
    // }
    
}

function kurang($a, $b){
    // if(isset($_POST['kurang'])){
        $hasil = $a - $b;
        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil : ".$hasil;
    //}
}

function kali($a, $b){
    // if(isset($_POST['kali'])){
        $hasil = $a * $b;
        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil : ".$hasil;
    // }
}

function bagi($a, $b){
    // if(isset($_POST['bagi'])){
        $hasil = $a / $b;
        echo "PEEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil : ".$hasil;
    // }
}
    
function modulus($a, $b){
    // if(isset($_POST['modulus'])){
        $hasil = $a % $b;
        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil : ".$hasil."<br>";
    // }    
}

$a = 10; 
$b = 5;
?>

<?php echo "Bil 1 = $a"; ?> <br>
<?php echo "Bil 2 = $b"; ?> <br><br>

<?php echo "Berikut adalah hasil dari setiap operasi : "; ?> <br><br>
<?php tambah($a,$b); ?> <br><br>
<?php kurang($a,$b); ?> <br><br>
<?php kali($a,$b); ?> <br><br>
<?php bagi($a,$b); ?> <br><br>
<?php modulus($a,$b); ?> <br><br>



    <!-- <form action="" method="POST">
           <label for="a">Bilangan 1    :</label>
           <input type="number" name="a" id="a" required="required" value="<?php echo $a; ?>"><br><br>

           <label for="a">Bilangan 2    :</label>
           <input type="number" name="b" id="b" required="required" value="<?php echo $b; ?>" /> <br><br>

           <input type="submit" name="operator" id="operator">  
    </form> -->

</body>

</html>
