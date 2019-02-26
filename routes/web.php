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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');


// Pages Routes
Route::get('/business', 'MainController@business_index');
Route::get('/business_list/{requests}', 'MainController@businesslist_index');
Route::get('/activerequest', 'MainController@activerequest_index');
Route::get('/purchaseform', 'MainController@purchaseform_index');
Route::get('/recurringform', 'MainController@recurringform_index');
// Route::get('/genaccounts', 'MainController@genaccounts_index');
Route::get('/genusers/{request}', 'MainController@genusers_index');
Route::get('/customers/{user}', 'MainController@businessusers_index');
Route::get('/create_lead_generator', 'MainController@creaetuser_index');
// Route::get('/leadsubmission', 'MainController@leadsubmission_index');
Route::post('/add_customer_order', 'MainController@addcustomerorder_index');
Route::post('/get_data', 'MainController@getdata_index');
Route::get('/add_customer/{user}', 'MainController@addcustomer_index');
Route::get('/page_404', 'MainController@pagenotfound_index');
Route::post('/update_status', 'MainController@updatestatus_update');
Route::get('/edit_request/{order_id}', 'MainController@editrequest_edit');
// Route::get('/products', 'MainController@products_index');

Route::post('/update_customer_order', 'MainController@updatecustomerorder_update');
// Route::get('/update_product/{id}', 'MainController@editproduct_edit');
Route::post('/product_edited', 'MainController@product_update');
Route::get('/submit_request/{id}', 'MainController@submitrequest_index');
Route::post('/get_order_data', 'MainController@getorderdata_show');
Route::post('/update_order_lead', 'MainController@orderlead_update');

Route::get('/configuration', 'MainController@configuration_index');
Route::post('/update_product', 'MainController@product_update');
Route::get('/view_request/{order_id}', 'MainController@viewrequest_show');



Route::get('/customer_all_leads/{request}/{id}', 'MainController@customerallleads_index');
Route::get('/lead_all_request/{request}/{id}', 'MainController@leadallrequest_index');

Route::get('/submitted_leads', 'MainController@submittedleads_index');

Route::get('/edit_user/{user_id}', 'MainController@edituser');

Route::post('/update_user_info', 'MainController@updateuser');















// Route::resource('product', 'ProductController');

// Route::get('/order/status/{status}', 'OrderController@status')->name('home');
// Route::get('/client', 'HomeController@client');


// Route::resource('order', 'OrderController');
