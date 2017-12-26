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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'ShopController@index')->name('home');
Route::resource('/cart', 'CarritoController');
Route::get('/cart/add-item/{id}', 'CarritoController@addItem')->name('cart.addItem');
Route::get('/contact', 'ShopController@contact')->name('contact');

Route::get('/tienda', 'ShopController@tienda')->name('tienda');
Route::get('/item', 'ShopController@item')->name('item');
Route::resource('message', 'MessagesController');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin','middleware'=>'auth', 'admin'], function () {
	Route::post('toggledeliver/{ordenId}', 'OrdenController@toggledeliver')->name('toggle.deliver');

	Route::get('/', function (){
		return view('admin.index');
    })->name('admin.index');
    
    Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
    Route::resource('product', 'ProductsController');
    Route::resource('category','CategoriesController');
    Route::get('ordens/{type?}', 'OrdenController@Ordens');
    Route::resource('messages', 'MessagesController');
});

Route::group(['middleware'=>'auth'], function () {
    Route::get('ship', 'CheckoutController@shipping')->name('checkout.shipping');
});


Route::resource('direccion', 'DireccionController');
Route::get('pago', 'CheckoutController@pago')->name('checkout.pago');
Route::post('store-payment','CheckoutController@storePago')->name('pago.store');


Route::get('test',function(){
   $ordens=App\Orden::find(2);
   $items=$ordens->orderItems;
});