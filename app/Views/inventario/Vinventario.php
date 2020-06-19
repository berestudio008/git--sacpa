<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SACPA | Invetario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="public/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
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
                            <a href="<?= base_url();?>/Inventario" class="nav-link active">
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

  <!-- Content Wrapper. Contains page

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INVENTARIO</h1>
          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tema predeterminado</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Código de producto</label> <br>
                  <input disabled="disabled" class="form-control " style="width: 100%;"  type="text" name="txtcodigo_producto" value="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="">Media producto </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtmedia_producto" value="">

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Código de barra</label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtcodigo_barra" value="" placeholder="Escriba el código de barra">
                </div>
                <!-- /.form-group -->
                <div class="form-group">

                  <label for="">Stock</label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtstock" value="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Costo de unidad </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtcosto_unidad" value="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Porcentage de ganancia </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtporcentage_ganancial" value="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Precio de venta 1  </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtprecio_venta1" value="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Precio de venta 2 </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtprecio_venta2" value="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Precio de venta </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtprecio_venta" value="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Ganancial fijo </label> <br>
                  <input class="form-control " style="width: 100%;" type="text" name="txtganancial_fijo" value="">
                </div>
                <!-- /.form-group -->
                </div>
                <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Fecha de vencimiento </label> <br>
                  <input class="form-control " style="width: 100%;" type="date" name="dtfecha_vencimiento" value="">
                </div>
                <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <label for="">Observaciones</label> <br>
                  <textarea class="form-control " style="width: 100%;" placeholder="Escriba la observación" name="txtobserbaciones" rows="4" cols="40" ></textarea>
                </div>
                <!-- /.form-group -->

                <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="">Fecha de inicio  </label> <br>
                  <input class="form-control " style="width: 100%;" type="date" name="dtfecha_inicial" value="">
                </div>
                <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <label for="">Estatud de producto </label> <br>
                  <select class="select2" multiple="multiple" data-placeholder ="Selecciona estatus de producto" name="cmdstatus_producto" data-dropdown-css-class="select2-purple" style="width: 100%;">
                  <option value="Activo">A</option>
                  <option value="Inactivo">I</option>
                  </select>




                                      </div>
                                      </div>

                <div class="row">
                  <input type="submit" name="Guardar" class="btn btn-primary mx-auto" value="Imprimir">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">


                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 400px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Escriba el código de compra">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>Código de producto</th>
                        <th>Media producto</th>
                        <th>Stock</th>
                        <th>Costo de unidad</th>
                        <th>Porcentage de ganancia</th>
                        <th>Ganancial fijo</th>
                        <th>Fecha de vencimiento</th>
                        <th>Fecha inicio</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>Bacon ipsum </td>
                        <td>Bacon ipsum </td>
                        <td>Bacon ipsum </td>
                        <td>Bacon ipsum </td>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
          <!-- /.card-body -->

        <!-- /.card -->
<br>
<br>
<br>
<br>

        <!-- SELECT2 EXAMPLE -->

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
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="public/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="public/plugins/moment/moment.min.js"></script>
<script src="public/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="public/pr/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/pr/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/pr/demo.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
