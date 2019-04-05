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


/**
 *
 */
Route::get('/product/{id}', 'ProductController@show')->name('product.show');

/**
 *
 */
Route::get('/produits', 'ProductController@index')->name('product.index');

Route::get('/produits/category', 'ProductController@category')->name('product.category');

Route::get('/produits/country', 'ProductController@country')->name('product.country');



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
Route::get('/panier', 'CartController@index')->name('panier.index');

Route::get('/panier/createAccount', 'CartController@createAccount')->name('panier.account');

Route::get('/panier/adresse1', 'CartController@adresse1')->name('panier.adresse1');

Route::get('/panier/adresse2', 'CartController@adresse2')->name('panier.adresse2');


Route::get('/panier/fraisdeport', 'CartController@fraisDePort')->name('panier.shipping');

Route::get('/panier/paiement', 'CartController@paiement')->name('panier.payment');


/**
 *
 *
 */

/**
 *
 *
 */
Route::get('/order', 'OrderController@show');




/**
 *BACK OFFICE
 *
 */
Route::namespace('Backoffice')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('', 'AdminController@index')->name('index');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
