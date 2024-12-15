<<<<<<< HEAD
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>daftar buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class='conteiner'>
        <h1>Daftar buku</h1>
    </div class="row">
    </div class="col-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <?php foreach ($data->getkolomtabel() as $kolom): ?>
                    <th scope="col">
                        <?php echo $kolom ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach ($data->getdata() as $buku): ?>

                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $buku->getjudul(); ?></td>
                    <td><?php echo $buku->getpengarang(); ?></td>
                    <td><?php echo $buku->getpenerbit(); ?></td>
                    <td><?php echo $buku->gettahun(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

=======
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>daftar buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class='conteiner'>
        <h1>Daftar buku</h1>
    </div class="row">
    </div class="col-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <?php foreach ($data->getkolomtabel() as $kolom): ?>
                    <th scope="col">
                        <?php echo $kolom ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach ($data->getdata() as $buku): ?>

                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $buku->getjudul(); ?></td>
                    <td><?php echo $buku->getpengarang(); ?></td>
                    <td><?php echo $buku->getpenerbit(); ?></td>
                    <td><?php echo $buku->gettahun(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
</html>