<?php
include '../asset/header.php';
?>

<html>
<head>
<title>Siperpus</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Tambah Anggota</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses-tambah.php" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telp">Telepon</label>
                                <input type="number" name="telp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" name="simpan"  class="btn btn-primary mr-auto">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include '../asset/footer.php';
?>