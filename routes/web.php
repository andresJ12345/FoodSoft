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

#region Rutas inicio y menu.
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

#region Rutas Ingrediente

Route::resource('ingrediente','IngredienteController');

#endregion

Route::get('Cliente/view',function() {

    return view('Cliente/view');
})->name('viewcli');

Route::get('Cliente/insert','ClienteController@insertCliente')->name('insertarcli');

Route::get('Cliente/view','ClienteController@ViewCli')->name('ViewCliente');

Route::get('Cliente/delete/{id}','ClienteController@DeleteCli')->name('DeleteCliente');

Route::get('Cliente/update/{id}','ClienteController@UpdateCli')->name('UpdateCliente');

Route::post('Cliente/insert','ClienteController@InsertCli')->name('InsertCliente');

Route::post('Cliente/update','ClienteController@UpdateBdCli')->name('UpdateBdCliente');
