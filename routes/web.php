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

// Get base (root) route
$base_route = basename(base_path());

Route::get($base_route, function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
    
// });

Route::get($base_route.'/generate-pdf','PDFController@generatePDF');

// Auth::routes();

$GLOBALS['base_route'] = basename(base_path());

Route::group(['prefix' => $GLOBALS['base_route']], function () {
  
Auth::routes();
// Authentication Routes...
// Route::get('login', [
//   'as' => 'login',
//   'uses' => 'Auth\LoginController@showLoginForm'
// ]);
// Route::post('login', [
//   'as' => 'login',
//   'uses' => 'Auth\LoginController@login'
// ]);



// Route::post('logout', [
//   'as' => 'logout',
//   'uses' => '\Auth\LoginController@logout'
// ]);

// // Route::post('logout', function (){
// // $base_route = basename(base_path());  
// // Auth::logout();
// // return redirect($base_route.'\login');
// // })->name('logout');

// // Password Reset Routes...
// Route::post('password/email', [
//   'as' => 'password.email',
//   'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
// ]);
// Route::get('password/reset', [
//   'as' => 'password.request',
//   'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
// ]);
// Route::post('password/reset', [
//   'as' => 'password.update',
//   'uses' => 'Auth\ResetPasswordController@reset'
// ]);
// Route::get('password/reset/{token}', [
//   'as' => 'password.reset',
//   'uses' => 'Auth\ResetPasswordController@showResetForm'
// ]);

// // Registration Routes...
// Route::get('register', [
//   'as' => 'register',
//   'uses' => 'Auth\RegisterController@showRegistrationForm'
// ]);
// Route::post('register', [
//   'as' => '',
//   'uses' => 'Auth\RegisterController@register'
// ]);
    
});
    Route::group(['prefix' => $base_route], function () {
   
    $base_route = basename(base_path());
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout_admin', 'HomeController@logout')->name('logout');

Route::post('/home/addclient', 'HomeController@addClient')->name('/home/addclient');
Route::post('/home/adddept', 'HomeController@addDept');
Route::post('/home/addtestMethods', 'HomeController@addtestMethods');
Route::post('/home/addtestMethodsParams', 'HomeController@addtestMethodsParams');
Route::get('/home/getDepts', 'HomeController@getDepts');

Route::get('/addtest/getTestParams', 'add_test@getTestParams');

Route::get('/addtest', 'add_test@index')->name('addtest');
Route::post('/submit_test','add_test@add_newtest');
Route::post('/update_test','add_test@update_test');
Route::get('/edit_test','add_test@edit_test')->name('edit_test');

Route::get('/dept', 'DepartmentController@index')->name('dept');
Route::get('/dept/addParams', 'DepartmentController@addParams');
Route::post('/dept/addParams', 'DepartmentController@addParamsDB')->name('postParams');

Route::post('/dept_login','DepartmentController@login')->name('/dept_login');
Route::get('/dept_login','DepartmentController@login');
Route::get('/show_print','Print_TestController@index')->name('show_print');
});
