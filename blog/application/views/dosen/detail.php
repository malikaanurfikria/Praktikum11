<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?= $dosen -> id ?></td>
                <td><?= $dosen -> nama ?></td>
                <td><?= $dosen -> tmp_lahir ?></td>
                <td><?= $dosen -> tgl_lahir ?></td>
                <td><?= $dosen -> gender ?></td>
                <td><?= $dosen ->nidn ?></td>
                <td><?= $dosen ->pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            <img src="<?=base_url()?>upload/photos/<?=$dosen->id?>.jpg" width="200"/>
            <div class="mt-4">
                <h4><?=$dosen->nama?></h4>
                <p>Foto Dosen</p>
                <br/> <br/>
                <a href="https://www.instagram.com/malikaanurfikria_/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                <br/> <br/>
                <?php echo form_open_multipart('dosen/upload');?>
                <input type="file" name="foto" size="200"/>
                <input type="hidden" name="iddosen" value="<?=$dosen->id?>"/>
                <br/> <br/>
                <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
