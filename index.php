<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
    <style>
        
        .content-header {
            background: linear-gradient(to bottom, rgba(30, 144, 255, 1) 0%, rgba(0, 85, 255, 1) 100%);
            padding: 20px 20px 40px; 
        }

        
        .content-header h1 {
            color: white; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
            margin-bottom: 5px; 
            font-size: 2.5em; 
            position: relative; 
            z-index: 1; 
            text-align: left; 
        }

      
        .content-header h2 {
            color: rgba(255, 255, 255, 0.8); 
            font-size: 1.5em; 
            margin: 0; 
            text-align: left; 
            padding-top: 5px; 
            z-index: 1; 
        }

        /* Card style */
        .small-box {
            border-radius: 8px;
            overflow: hidden;
            margin-top: -30px;
            position: relative; 
            z-index: 10; 
            transition: transform 0.3s, box-shadow 0.3s;
            background: white;
        }

        .small-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* efek shadow pada isi card */
        .small-box .inner {
            padding: 20px;
            position: relative;
            z-index: 20; 
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Sistem Informasi Manajemen Karyawan</h1>
            <h2>Dashboard Admin</h2>
        </section>
        <section class="content">
            <div class="row">
                <!-- Card Total Karyawan -->
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Total Karyawan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="karyawan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Card Total Jabatan -->
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>10</h3>
                            <p>Total Jabatan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <a href="jabatan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Card Total Divisi -->
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>5</h3>
                            <p>Total Divisi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <a href="divisi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>

</div>
</body>
</html>
