<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Ionicons -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="public/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="public/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <title>SACPA | Menú principal</title>
  </head>


  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url();?>/Menuprincipal" class="nav-link">Inicio</a>
        </li>

      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="public/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="public/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="public/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
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
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="public/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SACPA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="public/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Carlos Reyes</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treeview menu-open">
              <a  class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                   Administraciones
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url();?>/Usuario" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuario</p>
                  </a>
                </li>
                <li class="nav-item">
                  <li class="nav-item">
                    <a href="<?= base_url();?>/Producto" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Producto</p>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="<?= base_url();?>/Empleado" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Empleado</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Proveedores" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Proveedor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Departamentos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Departamento</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Labore" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Labores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Rol" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rol</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Modulo" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modulo</p>
                  </a>
                </li>
              </ul>
            </li>


          </ul><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview menu-open">
              <a class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Negocio
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url();?>/Asignaciondeproductovendedor" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Producto Vendedor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Cliente" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar Cliente</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url();?>/Compraproveedor" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compra Proveedor</p>
                  </a>
                </li>

              </ul><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                  <a  class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Mobiliario equipo
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?= base_url();?>/Vehiculo" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registrar Vehículo</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= base_url();?>/Asignarvehiculos" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Asignación Vehículo</p>
                      </a>
                    </li>

                  </ul><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                      <a  class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Venta
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="<?= base_url();?>/Pedidosoficinas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pedido Oficina</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?= base_url();?>/Pedidosdistribuidor" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pedido Distribuidor</p>
                          </a>
                        </li>
                      </ul><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                          <a  class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                              Contabilidad
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="<?= base_url();?>/Cajachica" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Caja chica</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="<?= base_url();?>/Gastosdistribuidores" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asignar Gasto</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liquidar</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="<?= base_url();?>/Inventario" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventario</p>
                              </a>
                            </li>

                        </ul><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                          <a  class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                              Reportes
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="<?= base_url();?>/Reportedistribuidor" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Distribuidor</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="<?= base_url();?>/Resportegrafico" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Grafico por Mes</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="<?= base_url();?>/Cumpleano" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cumpleaño</p>
                              </a>
                            </li>
                          </ul><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          <li class="nav-item has-treeview menu-open">
                            <a href="<?= base_url();?>/Login" class="nav-link active">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>
                                Cierre
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>





      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Pantalla Principal</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Nuevo Pedido</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p> Cliente Registrado</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>Productos Rechazados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Productos Vencidos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
        <br>
          <br>
            <br>
              <br>
              <br>
                <br>
                  <br>
                    <br>
                    <br>
                      <br>
                        <br>




    <footer class="main-footer">
      <strong>Copyright SACPA &copy; Contacto 809-886-88995</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="public/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="public/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="public/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="public/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="public/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="public/plugins/moment/moment.min.js"></script>
  <script src="public/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="public/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/pr/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="public/pr/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="public/pr/demo.js"></script>
</body>
</html>
