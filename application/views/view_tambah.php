<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Menghubungkan Boostrap secara Online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Menghubungkan Boostrap secara Online -->

    <title>Tambah Data Warga</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="alert alert-primary my-2 text-center" role="alert">Tambah Data Warga</h5>
                <!-- Awal Form tambah data  -->
                <form action="<?= base_url(); ?>warga/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Anda">
                    </div>
                    <!-- Awal tombol untuk Tambah Data -->
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    <!-- Akhir tombol untuk Tambah Data -->

                    <!-- Awal Tombol Kembali -->
                    <a href="<?= base_url(); ?>warga/" class="btn btn-outline-info">Kembali</a>
                    <!-- Akhir Tombol Kembali -->

                </form>
                <!-- Akhir Form tambah data  -->
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</body>

<!-- Menghubungkan Jquery secara Online -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<!-- Menghubungkan Jquery secara Online -->

</html>