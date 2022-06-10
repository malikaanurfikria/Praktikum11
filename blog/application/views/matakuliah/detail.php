<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL MATAKULIAH</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>KODE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $matakuliah -> id ?></td>
                <td><?php echo $matakuliah -> nama ?></td>
                <td><?php echo $matakuliah -> sks ?></td>
                <td><?php echo $matakuliah -> kode ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>