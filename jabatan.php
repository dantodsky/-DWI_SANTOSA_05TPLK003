<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Jabatan</title>
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
            <h1>Data Jabatan</h1>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Jabatan</h3>
                    <a href="addjabatan.php" class="btn btn-primary float-right">Tambah Jabatan</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jabatan</th>
                                <th>Nama Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy Data -->
                            <tr>
                                <td>1</td>
                                <td>J001</td>
                                <td>Manager</td>
                                <td>
                                    <a href="editjabatan.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapusjabatan.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>J002</td>
                                <td>Staff</td>
                                <td>
                                    <a href="editjabatan.php?id=2" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapusjabatan.php?id=2" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>J003</td>
                                <td>HR</td>
                                <td>
                                    <a href="editjabatan.php?id=3" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapusjabatan.php?id=3" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>

</div>
</body>
</html>
