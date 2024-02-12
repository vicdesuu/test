<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//DEFAULT ROUTES
$routes->get('/', 'Startseite::index');
$routes->get('Startseite', 'Startseite::index');

$routes->get('Student', 'Student::index');
$routes->get('Dozent', 'Dozent::index');

$routes->get('Kurse_Student', 'Kurse_Student::index');
$routes->get('Kurse_Dozent', 'Kurse_Dozent::index');

$routes->get('Prüfungen_Student', 'Prüfungen_Student::index');
$routes->get('Prüfungen_Dozent', 'Prüfungen_Dozent::index');

$routes->get('Profil_Student', 'Profil_Student::index');
$routes->get('Profil_Dozent', 'Profil_Dozent::index');

$routes->get('create_kurs', 'create_kurs::index');
$routes->get('create_prüfung', 'create_prüfung::index');

$routes->get('Meine_Kurse', 'Meine_Kurse::index');
$routes->get('Meine_Prüfungen', 'Meine_Prüfungen::index');

//login
$routes->get('login', 'Login::showLogin');
$routes->post('login', 'Login::login');
//$routes->get('logout', 'Login::logout'); //Noch nicht richtig Implementiert

//News
$routes->post('Dozent/addNews', 'Dozent::addNews');

//anlegen von kursen
$routes->post('kurse/save', 'Kurse_Dozent::save');

//anlegen von prüfungen
$routes->post('prüfungen/save', 'Prüfungen_Dozent::save');

//anmelden und abmelden für kurse
$routes->match(['get', 'post'], 'anmelden/(:num)', 'Kurse_Student::anmelden/$1');
$routes->match(['get', 'post'], 'abmelden/(:num)', 'Kurse_Student::abmelden/$1');

//anmelden und abmleden für prüfungen
$routes->match(['get', 'post'], 'anmeldenPrüfung/(:num)', 'Prüfungen_Student::anmeldenPrüfung/$1');
$routes->match(['get', 'post'], 'abmeldenPrüfung/(:num)', 'Prüfungen_Student::abmeldenPrüfung/$1');
