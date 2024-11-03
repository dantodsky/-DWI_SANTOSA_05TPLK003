<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lembur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Tambah Lembur</h1>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Lembur</h3>
                </div>
                <div class="card-body">
                    <form action="simpan_lembur.php" method="post">
                        <div class="form-group">
                            <label for="karyawan">Karyawan</label>
                            <select class="form-control" id="karyawan" name="karyawan" required>
                                <option value="">Pilih Karyawan</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <!-- Tambahkan opsi karyawan lainnya sesuai kebutuhan -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lembur">Tanggal Lembur</label>
                            <input type="date" class="form-control" id="tanggal_lembur" name="tanggal_lembur" required>
                        </div>
                        <div class="form-group">
                            <label for="jam_lembur">Jam Lembur</label>
                            <input type="text" class="form-control" id="jam_lembur" name="jam_lembur" placeholder="Contoh: 2 Jam" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="lembur.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>

</div>
</body>
</html>
