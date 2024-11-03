<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Izin</title>
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
            <h1>Tambah Izin</h1>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Izin</h3>
                </div>
                <div class="card-body">
                    <form action="simpan_izin.php" method="post">
                        <div class="form-group">
                            <label for="karyawan">Karyawan</label>
                            <select class="form-control" id="karyawan" name="karyawan" required>
                                <option value="">Pilih Karyawan</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_izin">Tanggal Izin</label>
                            <input type="date" class="form-control" id="tanggal_izin" name="tanggal_izin" required>
                        </div>
                        <div class="form-group">
                            <label for="alasan">Alasan</label>
                            <input type="text" class="form-control" id="alasan" name="alasan" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="izin.php" class="btn btn-secondary">Kembali</a>
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
