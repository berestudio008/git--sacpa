<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

#Administradores

$routes->get('/Login','Login::index');
$routes->get('/Usuario', 'Usuario::index');
$routes->get('/Usuariomostrar', 'Usuariosmostrar::index');
$routes->get('/Usuarimomodificar', 'Usuariosmodificar::index');
$routes->get('/Producto', 'Producto::index');
$routes->get('/Productomostrar', 'Productomostrar::index');
$routes->get('/Usuarimomodificar', 'Productomodificar::index');
$routes->get('/Empleado', 'Empleado::index');
$routes->get('/Empleadomostrar', 'Empleadomostrar::index');
$routes->get('/Empleadomodificar', 'Empleadomodificar::index');
$routes->get('/Departamento', 'Departamentos::index');
$routes->get('/Departamentomostrar', 'Departamentosmostrar::index');
$routes->get('/Departamentomodificar', 'Departamentosmodificar::index');

$routes->get('/Labore', 'Labores::index');
$routes->get('/Laboremostrar', 'Laboresmostrar::index');
$routes->get('/Laboremodificar', 'Laboresmodificar::index');
$routes->get('/Proveedores', 'Proveedores::index');
$routes->get('/Proveedoresmostrar', 'Proveedoresmostrar::index');
$routes->get('/Proveedoresmodificar', 'Proveedoresmodificar::index');
$routes->get('/Rol', 'Roles::index');
$routes->get('/Rolmostrar', 'Rolesmostrar::index');
$routes->get('/Rolmodificar', 'Rolesmodificar::index');
$routes->get('/Modulo', 'Modulos::index');
$routes->get('/Modulomostrar', 'Modulosmostrar::index');
$routes->get('/Modulomodificar', 'Modulosmodificar::index');



#Negocio
$routes->get('/Cliente', 'Cliente::index');
$routes->get('/Clientemodificar', 'Clientemodificar::index');
$routes->get('/Clientemostrar', 'Clientemostrar::index');
$routes->get('/Proveedor', 'Proveedores::index');
$routes->get('/Asignaciondeproductovendedor', 'Asignacin_producto_distribuidor::index');
$routes->get('/Productovendedormostrar', 'Asignacin_producto_distribuidormostrar::index');
$routes->get('/Productovendedormodificar', 'Asignacin_producto_distribuidormodificar::index');
$routes->get('/Compraproveedor', 'Compras_maestro::index');
$routes->get('/Compraproveedormostrar', 'Compras_maestromostrar::index');
$routes->get('/Compraproveedormodificar', 'Compras_maestromodificar::index');

#Mobiliario equipo

$routes->get('/Asignarvehiculos', 'Asignar_vehiculos::index');
$routes->get('/Asignarvehiculosmodificar', 'Asignar_vehiculosmodificar::index');
$routes->get('/Asignarvehiculosmostrar', 'Asignar_vehiculosmostrar::index');

$routes->get('/Vehiculo', 'Vehiculo::index');
$routes->get('/Vehiculomodificar', 'Vehiculomodificar::index');
$routes->get('/Vehiculomostrar', 'Vehiculomostrar::index');
#Venta

$routes->get('/Pedidosdistribuidor', 'Pedidos_distribuidor::index');
$routes->get('/Pedidosdistribuidormodificar', 'Pedidos_distribuidormodificar::index');
$routes->get('/Pedidosdistribuidormostrar', 'Pedidos_distribuidormostrar::index');
$routes->get('/Pedidosoficinas', 'Pedidos_oficinas::index');
$routes->get('/Pedidosoficinasmodificar', 'Pedidos_oficinasmodificar::index');
$routes->get('/Pedidosoficinasmostrar', 'Pedidos_oficinasmostrar::index');
#Contabilidad

$routes->get('/Cajachica', 'Caja_chica::index');
$routes->get('/Cajachicamodificar', 'Caja_chicamodificar::index');
$routes->get('/Cajachicamostrar', 'Caja_chicamostrar::index');
$routes->get('/Gastosdistribuidores', 'Gastos_distribuidores::index');
$routes->get('/Gastosdistribuidoresmodificar', 'Gastos_distribuidoresmodificar::index');
$routes->get('/Gastosdistribuidoresmostrar', 'Gastos_distribuidoresmostrar::index');
$routes->get('/Invetario', 'Inventario::index');

#Reportes
$routes->get('/Reportedistribuidor', 'Reportedistribuidor::index');
$routes->get('/Cumpleano', 'Cumpleano::index');
$routes->get('/Resportegrafico', 'Resportegrafico::index');


#Login
$routes->get('/Login', 'Login::index');

#Menu principal
$routes->get('/Menuprincipal', 'Home::index');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
