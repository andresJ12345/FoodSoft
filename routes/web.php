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

/*
    Rutas inicio y menu.
*/
#region
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('menu/', function () {
    return view('menu');
});
#endregion


#region
Route::get('Vendedor/insert','VendedorController@ViewPro')->name('ViewProveedor');
#endregion
