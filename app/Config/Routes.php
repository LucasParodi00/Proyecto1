<?php

namespace Config;

use App\Controllers\Home;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
 
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Usuario_controller');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
 
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');

$routes->get('/productos', 'Productos_Controllers::mostrarProductos');
$routes->get('/nosotros', 'Home::nosotros');

$routes->get('/sesion', 'Home::sesion');
$routes->get('/registro', 'Usuario_controller::new');
$routes->post('/registro', 'Usuario_controller::create');
$routes->get('/contador', 'Home::contador');
$routes->get('/comercializacion', 'Home::comercializacion');


//---------------------------------------------------------
//              Inicio de sesion
$routes->get("/login", "Usuario_controller::login");
$routes->post("/login", "Usuario_controller::validaciones");

$routes ->group("/", ['filter' => 'admi'], function($routes){
    //-----------------------------------------------
        //rutas para las acciones
    $routes->get("/panel", "Usuario_controller::panel"); 
    $routes->get("/restaurar/(:num)", 'Usuario_Controller::restaurar/$1');
    $routes->get("/borrar/(:num)", 'Usuario_Controller::borrar/$1');
    $routes->get("/editar/(:num)", "Usuario_controller::editar/$1");
    $routes->get("/usuariosEliminados", "Usuario_controller::panelEliminados");
    $routes->post('/actualizar', 'Usuario_controller::actualizar');


    $routes->get('/registro2', 'Usuario_controller::newUsuario'); 
    $routes->post('/registro2', 'Usuario_controller::create2');
    //-----------------------------------------------

        //PRODUCTOS
    //---------------------------------------
    $routes->get('/panelProductos', 'Productos_Controllers::panelProductos');
    $routes->get('/cargaProductos', 'Productos_Controllers::new');
    $routes->post('/cargaProductos', 'Productos_Controllers::create');
    $routes->get('/productosEliminados', 'Productos_Controllers::panelEliminados');
    $routes->get("/restaurarProducto/(:num)", 'Productos_controllers::restaurar/$1');

    $routes->get("/borrarProducto/(:num)", 'Productos_Controllers::borrar/$1');
    $routes->get("/editarProducto/(:num)", "Productos_Controllers::editar/$1");
    $routes->post('/actualizarProducto', 'Productos_Controllers::actualizar');

    $routes->get('cargarImagen', 'Productos_Controllers::index');
    $routes->post('cargarImagen', 'Productos_Controllers::uploadImage');

    //-------------------------------------------------------
    $routes ->get("/panelAdministrador", "panelControllers::panelDeCotrol");

    $routes->get('consultas', 'Consulta_Controller::listarConsultas');
    $routes->get('contestados', 'Consulta_Controller::contestados');
    $routes->get("/contestarConsulta/(:num)", 'Consulta_Controller::borrar/$1');
    $routes->get("/mostrarConsulta/(:num)", 'Consulta_Controller::editar/$1');
    $routes->post('/actualizarConsulta', 'Consulta_Controller::actualizar');


    
    
});

$routes ->get('/carrito', 'Carrito_Controller::verCarrito');
$routes ->post('/carrito', 'Carrito_Controller::verCarrito');
$routes ->post ('/agregar_carrito', 'Carrito_Controller::agregar_carrito');
$routes ->get ('/agregar_carrito', 'Carrito_Controller::agregar_carrito');
$routes ->get ('/vaciarCarrito', 'Carrito_Controller::vaciarCarrito' );
$routes ->get ('/eliminarCarrito', 'Carrito_Controller::eliminarCarrito' );
$routes->get('sumar_carrito', 'Carrito_controller::sumar_carrito');
$routes->get('restar_carrito', 'Carrito_controller::restar_carrito');

$routes->get('comprar', 'Carrito_controller::comprar');

$routes->get('/contacto', 'Consulta_Controller::contacto'); 
$routes->get('cargarConsulta', 'Consulta_Controller::new');
$routes->post('cargarConsulta', 'Consulta_Controller::cargarConsulta');

$routes->get('detallesVentas', 'Carrito_Controller::verVentas');

$routes->get('misventas', 'Carrito_Controller::misVentas');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
