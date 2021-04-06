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
$routes->setDefaultController('Dokumen');
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
$routes->get('/', 'Index::index');

$routes->group('', ['filter' => 'login'], function($routes){
	
	//route dashboard
	// $routes->get('dashboard', 'Dashboard::index');
	$routes->get('dashboard', 'Dashboard::index', ['filter' => 'role:admin']);
	$routes->get('dashboard/index', 'Dashboard::index', ['filter' => 'role:admin']);

	// Route kategori test
	$routes->get('categorytest', 'Categorytest::index', ['filter' => 'role:admin']);
	$routes->get('categorytest/index', 'Categorytest::index', ['filter' => 'role:admin']);

	// Route test pilihan ganda
	$routes->get('testuji', 'Testuji::index', ['filter' => 'role:admin,peserta']);
	$routes->get('testuji/index', 'Testuji::index', ['filter' => 'role:admin,peserta']);

	// Route role&permission
	$routes->get('role', 'Role::index', ['filter' => 'role:admin']);
	$routes->get('role/index', 'Role::index', ['filter' => 'role:admin']);
	$routes->get('permission', 'Permission::index', ['filter' => 'role:admin']);
	$routes->get('permission/index', 'Role::index', ['filter' => 'role:admin']);

	// Route master data user
	$routes->get('master_data_user', 'Master_data_user::index', ['filter' => 'role:admin']);
	$routes->get('master_data_user/index', 'Master_data_user::index', ['filter' => 'role:admin']);
	$routes->get('master_data_penguji', 'Master_data_penguji::index', ['filter' => 'role:admin']);
	$routes->get('master_data_penguji/index', 'Master_data_penguji::index', ['filter' => 'role:admin']);
	$routes->get('master_data_pengawas', 'Master_data_pengawas::index', ['filter' => 'role:admin']);
	$routes->get('master_data_pengawas/index', 'Master_data_pengawas::index', ['filter' => 'role:admin']);
	
	// Route bank soal
	$routes->get('bank_soal', 'Bank_soal::index', ['filter' => 'role:admin']);
	$routes->get('bank_soal/index', 'Bank_soal::index', ['filter' => 'role:admin']);

	// Route master test
	$routes->get('master_data_peserta_motor', 'Master_data_peserta_motor::index', ['filter' => 'role:admin,penguji']);
	$routes->get('master_data_peserta_motor/index', 'Master_data_peserta_motor::index', ['filter' => 'role:admin,penguji']);
	$routes->get('master_data_peserta_motor/p2', 'Master_data_peserta_motor::p2', ['filter' => 'role:admin']);

	$routes->get('master_data_peserta_mobil', 'Master_data_peserta_mobil::index', ['filter' => 'role:admin,penguji']);
	$routes->get('master_data_peserta_mobil/index', 'Master_data_peserta_mobil::index', ['filter' => 'role:admin,penguji']);

	$routes->get('master_data_peserta_wawancara', 'Master_data_peserta_wawancara::index', ['filter' => 'role:admin,penguji']);
	$routes->get('master_data_peserta_wawancara/index', 'Master_data_peserta_wawancara::index', ['filter' => 'role:admin,penguji']);

	$routes->get('master_data_peserta', 'Master_data_peserta::index', ['filter' => 'role:admin,penguji']);
	$routes->get('master_data_peserta/index', 'Master_data_peserta::index', ['filter' => 'role:admin,penguji']);
	
	$routes->get('students', 'StudentController::index', ['filter' => 'role:admin']);
	$routes->get('students/index', 'StudentController::index', ['filter' => 'role:admin']);
}); 

$routes->get('index', 'Index::index');




/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

$route['admin'] = 'admin/overview';