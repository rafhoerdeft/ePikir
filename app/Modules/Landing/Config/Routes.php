<?php

namespace App\Modules\Landing\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('landing', ['namespace' => 'App\Modules\Landing\Controllers'], function ($subroutes) {

	// Beranda
	$subroutes->get('', 'Beranda::index');
	$subroutes->get('home', 'Beranda::index');

	// Profil
	$subroutes->get('about', 'Profil::about');
	$subroutes->get('tugaspokok', 'Profil::tugasPokok');
	$subroutes->get('organisasi', 'Profil::strukturOrganisasi');
	// $subroutes->get('regulasi', 'Profil::regulasi');
	$subroutes->group('regulasi', function ($routes) {
		$routes->get('', 'Profil::regulasi');
		$routes->get('detail/(:any)', 'Profil::regulasiDetail/$1');
	});

	// Publikasi
	$subroutes->get('sop', 'Publikasi::sopLitbang');
	$subroutes->get('agenda', 'Publikasi::agenda');
	$subroutes->get('calendar', 'Publikasi::agendaCalendar');
	// $subroutes->get('rencanakerja', 'Publikasi::rencanaKerja');
	$subroutes->group('info', function ($routes) {
		$routes->get('', 'Publikasi::infoPublik');
		$routes->get('detail/(:any)', 'Publikasi::infoPublikDetail/$1');
	});
	$subroutes->group('berita', function ($routes) {
		$routes->add('', 'Publikasi::berita');
		$routes->get('detail/(:any)', 'Publikasi::beritaDetail/$1');
	});
	$subroutes->get('galeri', 'Publikasi::galeri');

	// Layanan
	$subroutes->group('izinpenelitian', function ($routes) {
		$routes->get('', 'Layanan::izinPenelitian');
		$routes->add('saverpl', 'Layanan::saveRekomendasiPenelitian');
		$routes->add('saveipl', 'Layanan::saveIzinPenelitian');
	});
	$subroutes->group('izinpengabdian', function ($routes) {
		$routes->get('', 'Layanan::izinPengabdian');
		$routes->add('saverpb', 'Layanan::saveRekomendasiPengabdian');
		$routes->add('saveipb', 'Layanan::saveIzinPengabdian');
	});
	$subroutes->group('klinik', function ($routes) {
		$routes->get('', 'Layanan::klinikPenelitian');
		$routes->add('savedata', 'Layanan::saveKlinikPenelitian');
	});
	$subroutes->add('selectnohp', 'Layanan::selectNoHp');
	// $subroutes->add('gettoken', 'Layanan::getToken');
	$subroutes->add('checktoken', 'Layanan::checkToken');

	// Kelitbangan
	$subroutes->group('hasilpenelitian', function ($routes) {
		$routes->get('', 'Litbang::penelitian');
		$routes->get('detail/(:any)', 'Litbang::penelitianDetail/$1');
	});
	$subroutes->group('hasilinovasi', function ($routes) {
		$routes->get('', 'Litbang::inovasi');
		$routes->get('detail/(:any)', 'Litbang::inovasiDetail/$1');
	});
});
