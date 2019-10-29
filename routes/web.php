<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main Page
Route::get('/', function() {
	return view('home.main');
});

// Static Pages - Institucional
Route::get('institucional/historia', function() {
	return view('pages.historia');
});

Route::get('institucional/mision', function() {
	return view('pages.mision');
});

Route::get('institucional/personal', function() {
	return view('pages.personal');
});

Route::get('institucional/fotos', function() {
	return view('pages.fotos');
});

// Static Pages - Ayuda
Route::get('ayuda/preguntas-frecuentes', function() {
	return view('pages.preguntas-frecuentes');
});

Route::get('ayuda/tutoriales', function() {
	return view('pages.tutoriales');
});

Route::get('ayuda/guia-de-usuarios', function() {
	return view('pages.guia-de-usuarios');
});

Route::get('ayuda/ubicacion', function() {
	return view('pages.ubicacion');
});

// Blog
Route::get('/novedades', function() {
	return view('blog.index');
});

// Orders Books
//Route::get('pedidos', 'OrdersController@index');
Route::resource('pedidos', 'OrdersController');

// PMB - Partner
Route::get('socios', 'PartnerController@index')->name('socios');
Route::patch('subir_foto', 'PartnerController@upload_photo')->name('subir_foto');
Route::post('pmb/registro', 'PartnerController@registerPartner')->name('registro_socio');
Route::post('pmb/dashboard', 'PartnerController@login')->name('dashboard');
Route::post('pmb/pdf', 'PartnerController@pdf')->name('pdf');
Route::get('pmb/formulario', 'PartnerController@viewFormPDF')->name('formulario');
Route::get('pmb/editar_socio', 'PartnerController@viewFormEditPartner')->name('editar_socio');
Route::patch('pmb/update', 'PartnerController@updatePartner')->name('actualizar_socio');
Route::get('pmb/password_socio', 'PartnerController@viewFormPasswordPartner')->name('password_socio');
Route::patch('pmb/change_password', 'PartnerController@changePasswordPartner')->name('editar_password');
Route::get('pmb/salir', 'PartnerController@exitPartner')->name('salir');

// Books
Route::get('books', 'BooksController@index');

Route::get('blog', 'PagesController@home');
Route::get('blog/{post}', 'PostsController@show');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('posts', 'PostsController@index')->name('admin.posts.index');
	Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
	Route::post('posts/create', 'PostsController@store')->name('admin.posts.store');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Repository Bibexa
Route::get('repositorio/catalogo', function() {
	return view('repositorio');
});

// Nuevo sitio de bibexa
Route::get('novedades/nuevo-sitio-web-bibexa', function() {
	return view('nuevo-sitio-bibexa');
});