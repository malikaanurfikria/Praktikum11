<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOSEN</title>
    <script>
function hapusDosen(pesan){
    if (confirm(pesan)){
        return true;
    }
    else{
        return false;
    }
}
</script>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
</head>
<body>
    <div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($dosen as $dsn) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn -> nama ?></td>
                <td><?php echo $dsn -> nidn ?></td>
                <td><?php echo $dsn -> pendidikan ?></td>
                <td>
    <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>" 
    class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/dosen/edit/$dsn->id") ?> 
    class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/dosen/delete/$dsn->id") ?> class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
    onclick=" return hapusDosen('Anda Yakin ingin menghapus dosen yang bernama <?php echo $dsn->nama ?>?')">Hapus</a>
</td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?=base_url()?>index.php/dosen/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
</div>
</body>
</html>