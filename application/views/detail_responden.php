<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/fontawesome-free/css/all.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jqvmap/jqvmap.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/adminlte.min.css'?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/summernote/summernote-bs4.css'?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url().'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700'?>" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" >
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index" class="nav-link">Home</a>
          </li>
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" >
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="<?php echo base_url().'assets/img/logo-bmkg.png'?>" alt="logo" class="brand-image elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light"> BMKG Jawa Tengah</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo base_url().'assets/img/user2-160x160.jpg'?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Ricky Rivaldo</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
            <li class="nav-header">MENU APLIKASI</li>
            <li class="nav-header">SISTEM KEPUASAN MASYARAKAT</li>
              <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Hasil Survey
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/statistika_hasil'?>" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Statistika Hasil
                  </p>
                </a>
              </li>
              <li class="nav-header">SISTEM PERMINTAAN DATA</li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/list_permintaan_data'?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    List Permintaan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/list_ketersediaan_data'?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Lihat Ketersediaan Data
                  </p>
                </a>
              </li>
              
              <li class="nav-header">SISTEM PEMETAAN CURAH HUJAN</li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/list_data'?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    List Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/upload_data'?>" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Upload Data
                  </p>
                </a>
              </li>
              
            
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="col mb-2">
            <a class="btn btn-block btn-primary" style="width: 90px; margin-bottom: 20px" 
            href="<?php echo base_url().'admin/hasil_survey'?>" >Back</a>
            <div class="card card-primary">  
              <div class="card-header">
                <h1 class="">Jawaban Responden 
                <?php foreach ($data_responden as $d){?> 
                    <?php echo  $d->Nama;?>
                <?php }?>
                </h1>
              </div>
            </div>

            
              <!-- Main content -->
              <section class="content">
                <div class="row">
                  <div class="col-12">
                      <!-- /.card-header -->
                    <div class="card">
                      <!-- <div class="card-header">
                        <h3 class="card-title"></h3>
                      </div> -->
                      <!-- /.card-header -->
                      <div class="card-body">
                      <?php foreach ($data_responden as $d){?> 
                        <div class="form-group">
                            <h5>No Responden</h5>
                            <input type="text" name="first_name" value="<?php echo  $d->ID ;?>" required
                            class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Nama Responden</h5>
                              <input type="text" name="first_name" value="<?php echo  $d->Nama ;?>" required
                                class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Umur</h5>
                              <input type="text" name="first_name" value="<?php echo  $d->Umur ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Jenis Kelamin</h5>
                              <input type="text" name="first_name" value="<?php echo  $d->Jenis_kelamin ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Pendidikan</h5>
                              <input type="text" name="first_name" value="<?php echo  $d->Pendidikan ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Pekerjaan</h5>
                              <input type="text" name="first_name" value="<?php echo  $d->Pekerjaan ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Email</h5>
                              <input type="text" name="first_name" value="<?php echo  $d->Email ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <?php }?>
                      <!-- /.card-body -->
                    </div>
                    <div class="card-body">
                      <?php foreach ($jawaban as $j){?> 
                        <div class="form-group">
                            <h5>Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan data dan informasi iklim di Stasklim Semarang.</h5>
                            <input type="text" name="first_name" value="<?php echo  $j->Jopsi1 ;?>" required
                            class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi2 ;?>" required
                                class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kejelasan dan kepastian petugas yang melayani di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi3 ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi4 ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang tanggung jawab petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi5 ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi6 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kecepatan pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi7 ;?>" required
                              class="form-control" disabled="">
                        </div>
                            <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang keadilan untuk mendapatkan pelayanan di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi8 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi9 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi10 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi11 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelayanan data dan informasi iklim di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi12 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang kenyamanan di lingkungan unit pelayanan data di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi13 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                            <h5>Bagaimana pendapat Saudara tentang keamanan pelayanan data di Staklim Semarang</h5>
                              <input type="text" name="first_name" value="<?php echo  $j->Jopsi14 ;?>" required
                              class="form-control" disabled="">
                        </div>
                        
                        <?php }?>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>
              <!-- /.content -->
              </div>
              </div>
            </div>
            </div>
            <br>
            <br>
              
      <!-- /.content-wrapper -->
      <footer class="main-footer fixed-bottom">
        <strong>Copyright &copy; Turu Teams
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 0.0.1
        </div>
      </footer>
    
     
     </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js'?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url().'assets/plugins/chart.js/Chart.min.js'?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url().'assets/plugins/sparklines/sparkline.js'?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url().'assets/plugins/jqvmap/jquery.vmap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jqvmap/maps/jquery.vmap.usa.js'?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url().'assets/plugins/jquery-knob/jquery.knob.min.js'?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url().'assets/plugins/moment/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url().'assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'?>"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url().'assets/plugins/summernote/summernote-bs4.min.js'?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url().'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url().'assets/js/adminlte.js'?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url().'assets/js/pages/dashboard.js'?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url().'assets/js/demo.js'?>"></script>
    <!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js'?>"></script>
    <!-- page script -->
<!-- <script>
  $( function() {
    
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      
    });
  });
</script> -->

    </body>
    </html>





<!-- 
<h1>haiii</h1>
<div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nama Responden</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($data_responden as $d){?> 
                            <td><?php echo  $d->Nama;?></td>
                          <?php }?>

                          <?php foreach ($jawaban as $j){
                            ?>
                            <td><?php echo  $j->ID ;?></td>
                            
                          </tbody>
                          <?php }?>
                          </table>
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </div> -->