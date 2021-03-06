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

Route::get('/', "HomeController@index")->name('home.index');
Route::get('/concept', "ConceptController@index")->name('concept.index');
Route::get('/contact', "ContactController@index")->name('contact.index');


/**
 *
 */
Route::get('/product/{id}', 'ProductController@show')->name('product.show');

/**
 *
 */
Route::get('/produits', 'ProductController@index')->name('product.index');

Route::get('/category/{category}', 'CategoryController@show')->name('category.show');


Route::get('/produits/country', 'ProductController@country')->name('product.country');



/*
 *      USER
 */

Route::get('/user/account', 'UserController@account')->name('user.account');
Route::get('/user/orders', 'UserController@orders')->name('user.orders');
Route::get('/user/addresses', 'UserController@addresses')->name('user.addresses');

/*
Route::get('/user/addressesupdate', 'UserController@addressesupdate')->name('user.addresses');
*/




/**
 *
 *
 *      CART
 *
 *
 *
 */



/**
 *
 *
 */
Route::get('/panier', 'CartController@index')->name('cart.index');

Route::get('/panier/adresse1', 'CartController@adresse1')->name('cart.adresse1')->middleware('auth');

Route::get('/panier/adresse2', 'CartController@adresse2')->name('cart.adresse2')->middleware('auth');

Route::get('/panier/fraisdeport', 'CartController@shipping')->name('cart.shipping')->middleware('auth');

Route::get('/panier/paiement', 'CartController@payment')->name('cart.payment')->middleware('auth');

Route::get('add-to-cart/{id}', 'ProductController@addToCart');

Route::patch('update-cart', 'ProductController@update');

Route::delete('remove-from-cart', 'ProductController@remove');

//Route::match(['get', 'post'], '/panier', 'CartController@addtocart');

/**
 *
 *
 */
Route::get('/order', 'OrderController@index')->name('order.index');

/**
 *BACK OFFICE
 *
 */
Route::namespace('Backoffice')->prefix('/admin')->middleware('is_admin')->name('admin.')->group(function () {
    Route::get('', 'AdminController@index')->name('index');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

