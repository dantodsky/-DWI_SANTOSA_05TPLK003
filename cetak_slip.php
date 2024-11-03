<?php
session_start();
include 'header.php'; 
include 'sidebar.php'; 


$id = isset($_GET['id']) ? $_GET['id'] : '';

// Data dummy karyawan untuk cetak slip
$karyawan = [
    1 => [
        'nama' => 'John Doe',
        'jabatan' => 'Manager',
        'gaji_pokok' => 10000000,
        'tunjangan' => 2000000,
        'potongan' => 1000000,
    ],
    2 => [
        'nama' => 'Jane Smith',
        'jabatan' => 'Staff',
        'gaji_pokok' => 5000000,
        'tunjangan' => 1000000,
        'potongan' => 500000,
    ],
    
];

$gaji = isset($karyawan[$id]) ? $karyawan[$id] : null;
$totalGaji = ($gaji['gaji_pokok'] + $gaji['tunjangan']) - $gaji['potongan'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Slip Gaji</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Cetak Slip Gaji</h1>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Slip Gaji Karyawan</h3>
                            </div>
                            <div class="card-body">
                                <?php if ($gaji): ?>
                                    <h4>Nama: <?php echo $gaji['nama']; ?></h4>
                                    <p>Jabatan: <?php echo $gaji['jabatan']; ?></p>
                                    <p>Gaji Pokok: Rp. <?php echo number_format($gaji['gaji_pokok'], 0, ',', '.'); ?></p>
                                    <p>Tunjangan: Rp. <?php echo number_format($gaji['tunjangan'], 0, ',', '.'); ?></p>
                                    <p>Potongan: Rp. <?php echo number_format($gaji['potongan'], 0, ',', '.'); ?></p>
                                    <h4>Total Gaji: Rp. <?php echo number_format($totalGaji, 0, ',', '.'); ?></h4>
                                <?php else: ?>
                                    <p>Data tidak ditemukan.</p>
                                <?php endif; ?>
                                <a href="slipgaji.php" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</div>
</body>
</html>
