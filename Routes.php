<?php
namespace Config;
use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')){
    require SYSTEMPATH . 'Config/Routes.php';
}
//Routes Setup

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users-list', 'UserController::index');
$routes->get('user-form', 'UserController::create');
$routes->post('submit-form', 'UserController::store');
$routes->get('edit-view/(:num)', 'UserController::singleUser/$1');
$routes->post('update', 'UserController::update');
$routes->get('delete/(:num)', 'UserController::delete/$1');



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
    require APPPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
