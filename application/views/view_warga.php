<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Menghubungkan Boostrap secara Online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Menghubungkan Boostrap secara Online -->

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <h4 class="alert alert-primary text-center my-3" role="alert">Data Warga Tempirai Timur</h4>

        <!-- Awal Tombol Tambah -->
        <a href="<?= base_url(); ?>warga/tambah" class="btn btn-primary">Tambah Data</a>
        <!-- Akhir Tombol Tambah -->
        <br><br>
        <!-- Awal Tabel -->
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($warga as $wrg) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $wrg->nama; ?></td>
                        <td><?= $wrg->alamat; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>warga/hapus/?id=<?= $wrg->id; ?>" onclick="return confirm('Yakin, Data Mau di hapus!')" class="btn btn-danger">Hapus</a>
                            <a href="<?= base_url(); ?>warga/edit?id=<?= $wrg->id; ?>" class="btn btn-primary ml-2">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Akhir Tabel -->
    </div>
</body>

<!-- Menghubungkan Jquery secara Online -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<!-- Menghubungkan Jquery secara Online -->

</html>