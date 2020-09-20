<html>
<head></head>
<body>
    <p>Daftar Prodi Jurusan Teknologi Informasi</p>
    <table border=1> <!--membuat table dengan ukuran garis 1-->
        <thead> <!--membuat table header-->
            <tr align="left"> <!--membuat perataan teks kiri-->
                <th>No</th>
                <th>Prodi</th>
                <th>Keterangan</th>     
            </tr>
        </thead>
        <tbody>
        <?php $no=1; //deklarasi var no
            foreach($arrayProdi as $row){?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['prodi']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
            </tr>
        <?php $no++; //increment var no
         } ?>
        </tbody>
    </table>
</body>
</html>