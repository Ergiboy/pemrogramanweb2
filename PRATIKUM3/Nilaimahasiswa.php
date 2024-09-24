<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table, th, td {
            border:1px solid black;
            border-collapse: collapse;
        }

        th,td {
            padding: 4px;
        }
    </style>
      <title>Nilai Mahasiswa</title>
</head>
<body>
    <h2>Nilai Mahasiswa</h2>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>tugas</th>
            <th>uts</th>
            <th>uas</th>
            <th>total nilai</th>
        </tr>
        <tbody>
                <?php
                include "Nilai.php";

                $mhs1 = new Nilai();
                $mhs1->settugas(98);
                $mhs1->setuts(95);
                $mhs1->setuas(95);

                $mhs2 = new Nilai();
                $mhs2->settugas(56);
                $mhs2->setuts(78);
                $mhs2->setuas(65);

                $mhs3 = new Nilai();
                $mhs3->settugas(78);
                $mhs3->setuts(38);
                $mhs3->setuas(45);

                echo"<tr>
                <td>1</td>
                <td>Ragit Dwi Saputra</td>
                <td>" . $mhs1-> gettugas() . "</td>
                <td>" . $mhs1-> getuts() . "</td>
                <td>" . $mhs1-> getuas() . "</td>
                <td>" . $mhs1-> gettotalnilai() . "</td>
                </tr>";

                echo"<tr>
                    <td>2</td>
                    <td>james bond</td>
                    <td>" . $mhs2-> gettugas() . "</td>
                    <td>" . $mhs2-> getuts() . "</td>
                    <td>" . $mhs2-> getuas() . "</td>
                    <td>" . $mhs2-> gettotalnilai() . "</td>
                    </tr>";

                    
                    echo"<tr>
                    <td>3</td>
                    <td>Mael lee</td>
                    <td>" . $mhs3-> gettugas() . "</td>
                    <td>" . $mhs3-> getuts() . "</td>
                    <td>" . $mhs3-> getuas() . "</td>
                    <td>" . $mhs3-> gettotalnilai() . "</td>
                    </tr>";


                    ?>
            </tbody>
    </thead>
            
    </table>
</body>
</html>