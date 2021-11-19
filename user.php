<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE E-Farma | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed ">
<div class="wrapper">

  <!-- Preloader -->
  
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

  

    <!-- Sidebar -->
    
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p><b>Halo <?php echo $_SESSION['level'];?></b>, <?php echo $_SESSION['username']; ?></p>
          <a href="logout.php" style="text-decoration: none;" >
              <p>Logout</p>
            </a>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 color-succes">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Dashboard
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul> 
          </li>
          <li class="nav-item">
            <a href="akun_user.php?username=<?php echo $_SESSION['username'];?>" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Akun</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Message</p>
            </a>
          </li> 

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <div class="topnav">
  <a href="#home" class="active">E-Farma</a>
  <div id="myLinks">
    <a href="#">Dashboard</a>
    <a href="akun_user.php?username=<?php echo $_SESSION['username'];?>">Akun</a>
    <a href="#">Message</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #7BC2FF;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
      <div class="container-fluid">
        <div class="row mb-2">
        <img src="img/banner.png" width="100%">
                <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="sukses_edit"){
			echo "<div class='alert alert-success alert-dismissible fade show mt-5' role='alert'>
  <strong>Edit Akun Sukses !</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
		}
	}
	?>
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		  <div class="container">
   <div class="row" id="load_data">
        <?php
          include './koneksi_produk.php';
          $query = "SELECT * FROM produk ORDER BY id_produk ASC";
          $dewan1 = $db1->prepare($query);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
          while ($row = $res1->fetch_assoc()) {
            $id_produk = $row["id_produk"];
            $gambar_produk = $row["gambar_produk"];
            $harga_produk = $row["harga_produk"];
            $nama_produk = $row["nama_produk"];
                 
        ?>
          <div class="col-sm-3 mb-3">
            <a href="detail_produk.php?id_produk=<?php echo $id_produk; ?>">
				<div class="card">
              <img src="<?php echo "images/$gambar_produk"; ?>" class="card-img-top" alt="gambar">
			  </a>
              <div class="card-body text-decoration-none">
				<h5 class="card-title"><?php echo $nama_produk; ?></h5>
				 <p class="card-text text-decoration-none">Rp <?php echo $harga_produk; ?></p>        
              </div>
			  
              <div class="card-footer">
                 <a href="beli.php"><button type="button" class="btn btn-primary w-100">Beli</button></a>
                </div>
            </div>
			
          </div>
        <?php } ?>

      </div>
</div>
			
                        

      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
