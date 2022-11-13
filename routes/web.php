<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index')->name('welcome');


Route::get('/beta', function () {
    return view('user.checkout.uploadbukti');
});


Auth::routes();

Route::get('/detailproduk/{id}', [App\Http\Controllers\ProductController::class, 'detailproduct'])->name('detailproduk');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/keranjang', [App\Http\Controllers\KeranjangController::class, 'index'])->name('keranjang');
Route::post('/konfirmasikeranjang', [App\Http\Controllers\ProductController::class, 'konfirmasikeranjang'])->name('konfirmasikeranjang');

Route::resource('alamat', CustAddressController::class);

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::post('/ordernow', [App\Http\Controllers\CheckoutController::class, 'order'])->name('ordernow');
Route::get('/ordercomplete', [App\Http\Controllers\CheckoutController::class, 'ordercomplete'])->name('ordercomplete');


//Kategori

Route::get('/dress', 'HomeController@dress')->name('dress');

Route::get('/tasdandompet', 'HomeController@tasdandompet')->name('tasdandompet');
Route::get('/kebaya', 'HomeController@kebaya')->name('kebaya');

Route::get('/murah', 'HomeController@murah')->name('murah');
Route::get('/mahal', 'HomeController@mahal')->name('mahal');

Route::get('/cari', 'HomeController@cari')->name('homesearch');

//// pesanan
Route::get('/pesanan', [App\Http\Controllers\OrderController::class, 'index'])->name('pesanan');
Route::get('/pesanan/show/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('showpesanan');
Route::delete('/pesanan/batalkan/{id}', [App\Http\Controllers\OrderController::class, 'batalkan'])->name('batalkanpesanan');
Route::get('/pesanan/bukti/{id}', [App\Http\Controllers\CheckoutController::class, 'showbukti'])->name('showbukti');
Route::post('/pesanan/uploadedbukti/{id}', [App\Http\Controllers\CheckoutController::class, 'bukti'])->name('buktiupload');



//Kategori
Route::delete('/deletecart/{id}', [App\Http\Controllers\KeranjangController::class, 'hapus'])->name('hapuskeranjang');


// Route::get('/alamat', [App\Http\Controllers\CustAddressController::class, 'index'])->name('alamat');
// Route::get('/tambahalamat', [App\Http\Controllers\HomeController::class, 'tambahalamat'])->name('tambahalamat');
// Route::post('/konfirmasialamat', [App\Http\Controllers\HomeController::class, 'konfirmasiaddress'])->name('konfirmasiaddress');


Route::get('/betamale', [App\Http\Controllers\CheckoutController::class, 'betarandom']);
// Route::get('/betamale1', [App\Http\Controllers\KeranjangController::class, 'hargatotal']);

Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Auth::routes(['verify' => true]);

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('produk', HomeController::class);

    Route::get('/user', 'UserController@index')->name('listcustomer');

    Route::resource('customer', UserController::class);

    Route::resource('penjualan', PenjualanController::class);


    Route::get('/dress', 'HomeController@dress')->name('dress');

    Route::get('/tasdandompet', 'HomeController@tasdandompet')->name('tasdandompet');
    Route::get('/kebaya', 'HomeController@kebaya')->name('kebaya');

    Route::get('/murah', 'HomeController@murah')->name('murah');
    Route::get('/mahal', 'HomeController@mahal')->name('mahal');

    Route::get('/cari', 'HomeController@cari')->name('homesearch');

});
