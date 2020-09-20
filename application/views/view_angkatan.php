<html>
<head></head>
<body>
    <p>Daftar Angkatan</p>
    <table border=1> <!--membuat table dengan ukuran garis 1-->
        <thead> <!--membuat table header-->
            <tr align="left"> <!--membuat perataan teks kiri-->
                <th>No</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1;
            foreach($angkatan as $row){?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['tahun']; ?></td>
            </tr>
        <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>