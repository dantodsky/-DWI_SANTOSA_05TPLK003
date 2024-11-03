<?php
session_start();
include 'header.php'; 
include 'sidebar.php'; 

// Data dummy karyawan dan gaji
$karyawan = [
    [
        'id' => 1,
        'nama' => 'John Doe',
        'jabatan' => 'Manager',
        'gaji_pokok' => 10000000,
        'tunjangan' => 2000000,
        'potongan' => 1000000,
    ],
    [
        'id' => 2,
        'nama' => 'Jane Smith',
        'jabatan' => 'Staff',
        'gaji_pokok' => 5000000,
        'tunjangan' => 1000000,
        'potongan' => 500000,
    ],
    
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji Karyawan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Slip Gaji Karyawan</h1>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Slip Gaji Karyawan</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan</th>
                                            <th>Potongan</th>
                                            <th>Total Gaji</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($karyawan as $k) : ?>
                                            <tr>
                                                <td><?php echo $k['id']; ?></td>
                                                <td><?php echo $k['nama']; ?></td>
                                                <td><?php echo $k['jabatan']; ?></td>
                                                <td>Rp. <?php echo number_format($k['gaji_pokok'], 0, ',', '.'); ?></td>
                                                <td>Rp. <?php echo number_format($k['tunjangan'], 0, ',', '.'); ?></td>
                                                <td>Rp. <?php echo number_format($k['potongan'], 0, ',', '.'); ?></td>
                                                <td>
                                                    <?php
                                                    $totalGaji = $k['gaji_pokok'] + $k['tunjangan'] - $k['potongan'];
                                                    echo "Rp. " . number_format($totalGaji, 0, ',', '.');
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="cetak_slip.php?id=<?php echo $k['id']; ?>" class="btn btn-primary btn-sm">Cetak Slip</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; // Mengimpor footer ?>
</div>
</body>
</html>
