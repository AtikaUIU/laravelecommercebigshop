<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProductController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */



//Route::view('/', 'welcome');
Route::get('/', 'HomeController@index')->name('home');


//Route::get('/aboutus', 'AboutusController@index');


/* Route::get('/home', 'HomeController@index')->name('home');
 */
Route::get('{pages}', 'AllPages')->name('pages')->where('pages', 'about_us|contact_us|terms'); 

Route::resource('products', 'ProductController');

Route::get('lang/locale', 'localizationController@index');

Route::post('/submitContact', 'ContactInfoController@submitContact')->name('submit_contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/livesearch', 'HomeController@livesearch');

Route::namespace("Admin")->prefix('admin')->group(function(){
    Route::get('/', 'dashboardcontroller@index')->name('admin.home');
    
    //Category Routes
    Route::resource('category', 'CategoryController');

    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

    Route::resource('product', 'ProductController');

    Route::get('/download_products', 'ProductController@downloadProducts')->name('download_products');
    Route::get('/download_order_details/{id}', 'OrderController@downloadOrderDetails')->name('download_order_details');
    Route::get('/allorder', 'OrderController@allOrder')->name('admin.allorder');
    Route::get('/orderdetails/{id}', 'OrderController@OrderDetails')->name('admin.orderdetails');
    Route::get('/orderapprove/{id}', 'OrderController@orderApprove')->name('admin.orderapprove');
    Route::get('/orderreject/{id}', 'OrderController@orderReject')->name('admin.orderreject');

    Route::namespace('Auth')->group(function(){
        Route::get('/login', 'logincontroller@showloginform')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::post('logout', 'logincontroller@logout')->name('admin.logout');
    });
});

Route::get('details/{id}', 'ProductController@details');

Route::post('/update-cart', 'CartController@updateCartAjax')->name('update-cart');
Route::post('/remove-from-cart', 'CartController@removeFromCartAjax')->name('remove-from-cart');
Route::get('/proceed-to-checkout', 'CartController@checkoutPage')->name('proceed-to-checkout');
Route::post('/submit-order', 'CartController@submitOrder')->name('submit-order');

Route::get('/thankyou', 'CartController@thankyou')->name('thankyou');

// Route::get('/thankyou', function () {
//     return view('thankyou')->name('thankyou');
// }); 