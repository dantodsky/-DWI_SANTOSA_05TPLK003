<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Karyawan</title>
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
            <h1>Data Karyawan</h1>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Karyawan</h3>
                    <a href="addkaryawan.php" class="btn btn-primary float-right">Tambah Karyawan</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy Data -->
                            <tr>
                                <td>1</td>
                                <td>K001</td>
                                <td>Andi Susanto</td>
                                <td>andi.susanto@example.com</td>
                                <td>Jl. Raya No.1, Jakarta</td>
                                <td>Manager</td>
                                <td>
                                    <a href="editkaryawan.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>K002</td>
                                <td>Budi Santoso</td>
                                <td>budi.santoso@example.com</td>
                                <td>Jl. Melati No.2, Bandung</td>
                                <td>Staff</td>
                                <td>
                                    <a href="editkaryawan.php?id=2" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=2" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>K003</td>
                                <td>Citra Dewi</td>
                                <td>citra.dewi@example.com</td>
                                <td>Jl. Anggrek No.3, Surabaya</td>
                                <td>HR</td>
                                <td>
                                    <a href="editkaryawan.php?id=3" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=3" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>K004</td>
                                <td>Dani Prasetyo</td>
                                <td>dani.prasetyo@example.com</td>
                                <td>Jl. Mawar No.4, Yogyakarta</td>
                                <td>IT Support</td>
                                <td>
                                    <a href="editkaryawan.php?id=4" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=4" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>K005</td>
                                <td>Elisa Handayani</td>
                                <td>elisa.handayani@example.com</td>
                                <td>Jl. Kenanga No.5, Bali</td>
                                <td>Marketing</td>
                                <td>
                                    <a href="editkaryawan.php?id=5" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=5" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>K006</td>
                                <td>Rizky Pratama</td>
                                <td>rizky.pratama@example.com</td>
                                <td>Jl. Melati No.6, Jakarta</td>
                                <td>Sales</td>
                                <td>
                                    <a href="editkaryawan.php?id=6" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=6" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>K007</td>
                                <td>Farah Nabila</td>
                                <td>farah.nabila@example.com</td>
                                <td>Jl. Mawar No.7, Bandung</td>
                                <td>HRD</td>
                                <td>
                                    <a href="editkaryawan.php?id=7" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=7" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>K008</td>
                                <td>Agung Setiawan</td>
                                <td>agung.setiawan@example.com</td>
                                <td>Jl. Cempaka No.8, Surabaya</td>
                                <td>IT Support</td>
                                <td>
                                    <a href="editkaryawan.php?id=8" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=8" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>K009</td>
                                <td>Indah Permatasari</td>
                                <td>indah.permatasari@example.com</td>
                                <td>Jl. Kenanga No.9, Medan</td>
                                <td>Desain Grafis</td>
                                <td>
                                    <a href="editkaryawan.php?id=9" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=9" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>K010</td>
                                <td>Andi Surya</td>
                                <td>andi.surya@example.com</td>
                                <td>Jl. Flamboyan No.10, Yogyakarta</td>
                                <td>Project Manager</td>
                                <td>
                                    <a href="editkaryawan.php?id=10" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=10" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>K011</td>
                                <td>Siti Fatimah</td>
                                <td>siti.fatimah@example.com</td>
                                <td>Jl. Anggrek No.11, Semarang</td>
                                <td>Keuangan</td>
                                <td>
                                    <a href="editkaryawan.php?id=11" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=11" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>K012</td>
                                <td>Budi Santoso</td>
                                <td>budi.santoso@example.com</td>
                                <td>Jl. Jati No.12, Makassar</td>
                                <td>Customer Service</td>
                                <td>
                                    <a href="editkaryawan.php?id=12" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=12" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>K013</td>
                                <td>Ayu Lestari</td>
                                <td>ayu.lestari@example.com</td>
                                <td>Jl. Durian No.13, Palembang</td>
                                <td>Pemasaran Digital</td>
                                <td>
                                    <a href="editkaryawan.php?id=13" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=13" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>K014</td>
                                <td>Yanto Prabowo</td>
                                <td>yanto.prabowo@example.com</td>
                                <td>Jl. Rafflesia No.14, Bali</td>
                                <td>Logistik</td>
                                <td>
                                    <a href="editkaryawan.php?id=14" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=14" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>K015</td>
                                <td>Lisa Melinda</td>
                                <td>lisa.melinda@example.com</td>
                                <td>Jl. Bunga No.15, Bandung</td>
                                <td>Analisis Data</td>
                                <td>
                                    <a href="editkaryawan.php?id=15" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=15" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>K016</td>
                                <td>Rina Amelia</td>
                                <td>rina.amelia@example.com</td>
                                <td>Jl. Melati No.16, Surabaya</td>
                                <td>Research & Development</td>
                                <td>
                                    <a href="editkaryawan.php?id=16" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=16" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>K017</td>
                                <td>Hendra Saputra</td>
                                <td>hendra.saputra@example.com</td>
                                <td>Jl. Sakura No.17, Jakarta</td>
                                <td>Web Developer</td>
                                <td>
                                    <a href="editkaryawan.php?id=17" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=17" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>K018</td>
                                <td>Siti Rahmawati</td>
                                <td>siti.rahmawati@example.com</td>
                                <td>Jl. Mangga No.18, Yogyakarta</td>
                                <td>Quality Control</td>
                                <td>
                                    <a href="editkaryawan.php?id=18" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=18" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>K019</td>
                                <td>Fajar Setiawan</td>
                                <td>fajar.setiawan@example.com</td>
                                <td>Jl. Emas No.19, Medan</td>
                                <td>Security</td>
                                <td>
                                    <a href="editkaryawan.php?id=19" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=19" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>K020</td>
                                <td>Desi Novita</td>
                                <td>desi.novita@example.com</td>
                                <td>Jl. Flamboyan No.20, Bali</td>
                                <td>Event Organizer</td>
                                <td>
                                    <a href="editkaryawan.php?id=20" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapuskaryawan.php?id=20" class="btn btn-danger btn-sm">Delete</a>
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
