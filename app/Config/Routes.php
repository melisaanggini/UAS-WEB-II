<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/kuisioner_awal', 'KuisionerAwal::index');
$routes->get('/kuisioner_biodata', 'KuisionerBiodata::index');
$routes->get('/kuisioner_layanan_akademik', 'KuisionerLayananAkademik::index');
$routes->get('/kuisioner_layanan_kemahasiswaan', 'KuisionerLayananKemahasiswaan::index');
$routes->get('/kuisioner_visi_misi', 'KuisionerVisiMisi::index');
$routes->get('/kuisioner_selesai', 'KuisionerSelesai::index');
$routes->get('/admin', 'Admin::index');
$routes->add('kuisioner_biodata', 'KuisionerBiodata::create');
$routes->get('Kuisioner', 'KuisionerController::index');
$routes->get('biodata/(:segment)/delete', 'Admin::delete/$1');





