<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Action</th>

    </tr>
    <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon, "select * from mahasiswa order by nim asc");
        $no=0;
        while($data=mysqli_fetch_array($hasil)):
            $no++;
    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="btn_edit" value="<?php echo $data['nim']; ?>">Edit</button>
            <button id="btn_delete" id="deleteButton" value="<?php echo $data['nim']; ?>">Hapus</button>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<h3>Catatan : </h3> 
<p>
    1. Data dapat diedit, namun NIM dari data tidak bisa diubah karena merupakan primary key
</p> 
<p>
    2. Data dapat dihapus langsung dengan menekan button hapus.
</p>  
