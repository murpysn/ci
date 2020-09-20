<html>
<head>
</head>
<body>
    <?php 
        /*
        echo "Nama:".$nama;
        echo "<br/>";
        echo "Nama:".$prodi;
        */
        $no=1;
        echo "<table border=1>
                <thead>
                    <tr><th>No</th><th>Nama</th><th>Prodi</th></tr>
                </thead><tbody>";
        foreach($Mahasiswa as $row){
            echo "<tr><td>".$no;
            echo "<td>".$row['nama'];
            echo "</td>";
            echo "<td>".$row['prodi'];
            echo "</td></tr>";
        $no++;
        }
        echo "</tbody></table>";
    ?>
</body>
</html>