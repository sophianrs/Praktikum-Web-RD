<?php
 include "koneksi.php";
 $id=$_GET['id'];
 
 $sql="select * from mahasiswa WHERE nim='$id'";

 $hasil=mysqli_query($kon,$sql);
 
 $data=mysqli_fetch_array($hasil);
?>
    <form id="form_mahasiswa_edit" method="post">

        <label>NIM </label><br>
        <input type="number" name="nim" value="<?php echo $data['nim'];?>"><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>

        <br>
        <label>Prodi</label>
        <select name="prodi">
            <option value="IF" <?php if($data['prodi']=="informatika" ) echo "selected"; ?>>    Teknik informatika  </option>
            <option value="EL" <?php if($data['prodi']=="Elektro" ) echo "selected"; ?>>        Teknik Elektro      </option>
            <option value="SI" <?php if($data['prodi']=="Sipil" ) echo "selected"; ?>>          Teknik Sipil        </option>
            <option value="TG" <?php if($data['prodi']=="Geofisika" ) echo "selected"; ?>>      Teknik Geofisika    </option>
            <option value="MA" <?php if($data['prodi']=="Matematika" ) echo "selected"; ?>>     Matematika          </option>
        </select><br><br>

        <label> Angkatan </label>
        <select name="angkatan">
            <option value="21" <?php if($data['angkatan']==2021 ) echo "selected"; ?>>2021</option>
            <option value="20" <?php if($data['angkatan']==2020 ) echo "selected"; ?>>2020</option>
            <option value="19" <?php if($data['angkatan']==2019 ) echo "selected"; ?>>2019</option>
            <option value="18" <?php if($data['angkatan']==2018 ) echo "selected"; ?>>2018</option>
            <option value="17" <?php if($data['angkatan']==2017 ) echo "selected"; ?>>2017</option>
        </select>   
        
        <br><br>
        <input type="submit" value="Ubah" id="simpanFile">
    </form>