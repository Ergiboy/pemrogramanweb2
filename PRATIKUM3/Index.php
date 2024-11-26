<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class"fs-45">
        <?php
           include "visibillity.php";

           $visibillity = new Visibillity();
           $visibillity -> tampilkanData();

           echo "br";

           echo "akses diluar kelas";
           echo " public :" . $visibillity->$public . "<br>";
          // echo " private :" . $visibillity->$private . "<br>";
          // echo " protector :" . $visibillity->$protector . "<br>";
          echo "<br><br>";
          echo "<h2> konsep pewarisan </h2>";

          include "mahasiswa.php";

          $mahasiswa = new mahasiswa("Ergiboy");
          $mahasiswa ->ucapsalam();

          $mahasiswainggris = new mahasiswaasing("chenboy");
          $mahasiswainggris ->ucapsalam();
 
           ?>
    </div>
</body>
</html>