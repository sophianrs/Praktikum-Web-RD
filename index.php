<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Belanja</title>
</head>
<body>
    <h1>Selamat datang ditoko buah</h1>

    <center>
        <table>
            <tr> 
                <td>Jenis Buah</td>
                <td>Harga Per-kg</td>
            </tr>

            <tr>
                <td>Mangga</td>
                <td>Rp.15.000</td>
            </tr>
            <tr>
                <td>Jambu</td>
                <td>Rp.13.000</td>
            </tr>
            <tr>
                <td>Salak</td>
                <td>Rp.10.000</td>
            </tr>
        </table>
    </center>
    <br><br>

    <center>
    <form method="POST" onsubmit="totalBelanja()">
    <ul>
        <li>
            <label for="mangga" class="form-label"> Mangga </label>
            <input type="number" name="mangga" id="mangga" class="form-control" required> <br>
        </li>
        <li>
            <label for="jambu" class="form-label"> Jambu </label>
            <input type="number" name="jambu" id="jambu"  class="form-control" required> <br>
        </li>
        <li>
            <label for="salak" class="form-label"> Salak </label>
            <input type="number" name="salak" id="salak" class="form-control" required> <br>
        </li>
        <li>
            <input type="submit" name="submit" value="hitung">
        </li>
    </ul>
        </form>  
    </center>
    

    <div id="hasil"></div>
    <script type="text/javascript">
        <?php

            class mangga{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 15000;
                }

                public function banyakMangga()
                {
                    return $this->banyak;
                }

                public function biayaMangga()
                {
                    return $this->biaya;
                }
            }

            class jambu{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 13000;
                }

                public function banyakJambu()
                {
                    return $this->banyak;
                }

                public function biayaJambu()
                {
                    return $this->biaya;
                }
            }

            class salak{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 10000;
                }

                public function banyakSalak()
                {
                    return $this->banyak;
                }

                public function biayaSalak()
                {
                    return $this->biaya;
                }
            }

        ?>

        function totalBelanja(){
            event.preventDefault()

            var jumlahMangga = document.getElementById('mangga').value;
            var jumlahJambu  = document.getElementById('jambu').value;
            var jumlahSalak  = document.getElementById('salak').value;

            var biayaMangga = 15000;
            var biayaJambu  = 13000;
            var biayaSalak  = 10000;

            var total = jumlahMangga*biayaMangga + jumlahJambu*biayaJambu + jumlahSalak*biayaSalak;

            output = document.getElementById('hasil');
            output.innerHTML = "Total Belanja :"+total;
        }
</script>
</body>
</html>