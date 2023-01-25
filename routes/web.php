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







Route::get('/live_search', 'LiveSearch@index')->name('live_search');;
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');


Route::get('/calculate' , 'CalculatorController@index')->name('calculate');
Route::post('/calculate' , 'CalculatorController@predictor')->name('calculate');

Route::get('/contact' , 'ContactController@index')->name('contact');
Route::post('/contact/send', 'ContactController@send');

Route::get('/letter' , 'LetterController@index')->name('letter');
Route::post('/letter/send', 'LetterController@send');

Route::get('/about' , 'AboutController@index')->name('about');

Route::get('/design' , 'DesignController@index')->name('design');




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('checkout' , 'OrderController');
Route::get('checkout' , 'OrderController@index')->name('checkout');

Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

Route::get('payment-status',array('as'=>'payment.status','uses'=>'PaymentController@paymentInfo'));
Route::get('payment',array('as'=>'payment','uses'=>'PaymentController@payment'));
Route::get('payment-cancel', function ()
{
   return 'Payment has been canceled';
});

/*Route::get('pay-with-paypal' , 'OrderController@paywithPaypal')->name('payment.paypal');
Route::get('paypal-Callback' , 'OrderController@paypalSuccess')->name('payment.paypalSuccess');*/

/*Route::get('/dropdownlist','OrderController@getCountryList');
Route::get('/get-state-list','OrderController@getStateList');
Route::get('/get-city-list','OrderController@getCityList');*/
/*Route::post('charge', 'OrderController@charge');
Route::get('paymentsuccess', 'OrderController@payment_success');
Route::get('paymenterror', 'OrderController@payment_error');*/

Route::group(['as' => 'products.' , 'prefix' => 'products'], function ()
{
    Route::get('/' , 'HomeController@show')->name('all');
    Route::get('/{product}', 'HomeController@single')->name('single');
    Route::get('/addToCart/{product}' , 'HomeController@addToCart')->name('addToCart');
});

Route::group(['as' => 'cart.' , 'prefix' => 'cart'], function ()
{
    Route::get('/' , 'HomeController@cart')->name('all');
    Route::post('/remove/{product}' , 'HomeController@removeProduct')->name('remove');
    Route::post('/update/{product}' , 'HomeController@updateProduct')->name('update');
});




Route::get('/change-password' , 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('change-password' , 'Auth\ChangePasswordController@changePassword')->name('password.update');
Route::get('/users/logout' , 'Auth\LoginController@logout')->name('user.logout');

Route::prefix('admin')->group(function()
{
    Route::get('/register' , 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register' , 'Auth\AdminRegisterController@register')->name('admin.register.submit');


    Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

   /* Route::get('/', 'AdminController@indexE')->name('events.index');*/
    Route::post('/events', 'AdminController@addEvent')->name('events.add');

    Route::get('/change-password' , 'Auth\AdminChangePasswordController@index')->name('admin.password.change');
    Route::post('change-password' , 'Auth\AdminChangePasswordController@changePassword')->name('admin.password.update');

    Route::get('/logout' , 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email' , 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset' , 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset' , 'Auth\AdminForgotPasswordController@reset');
    Route::get('/password/reset/{token}' , 'Auth\AdminForgotPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/users', 'manageAccountsController@index')->name('admin.accounts');

     Route::get('users/{user}/remove', 'ManageAccountsController@DeactivateUser')->name('user.deactivate');
    Route::get('users/trash', 'ManageAccountsController@trash')->name('user.trash');
    Route::get('users/activate/{id}', 'ManageAccountsController@ActivateUser')->name('user.activate');

    Route::get('shop_user/{shopkeeper}/remove', 'manageShopkeeperController@Deactivate')->name('shopkeeper.deactivate');
    Route::get('shop_user/trash', 'manageShopkeeperController@trash')->name('shopkeeper.trash');
    Route::get('shop_user/activate/{id}', 'manageShopkeeperController@Activate')->name('shopkeeper.activate');

    Route::get('/shop_user', 'manageShopkeeperController@index')->name('admin.Saccounts');

    Route::get('/design', 'AdminDesignController@index')->name('admin.design');

});

Route::prefix('shopkeeper')->group(function()
{
    Route::get('/register' , 'Auth\ShopkeeperRegisterController@showRegistrationForm')->name('shopkeeper.register');
    Route::post('/register' , 'Auth\ShopkeeperRegisterController@register')->name('shopkeeper.register.submit');



    Route::get('/login' , 'Auth\ShopkeeperLoginController@showLoginForm')->name('shopkeeper.login');
    Route::post('/login' , 'Auth\ShopkeeperLoginController@login')->name('shopkeeper.login.submit');

    Route::get('category/{category}/remove', 'CategoryController@remove')->name('category.remove');
    Route::get('category/trash', 'CategoryController@trash')->name('category.trash');
    Route::get('category/recover/{id}', 'CategoryController@recoverCat')->name('category.recover');

    Route::get('product/{product}/remove', 'ProductController@remove')->name('product.remove');
    Route::get('product/trash', 'ProductController@trash')->name('product.trash');
    Route::get('product/recover/{id}', 'ProductController@recoverProduct')->name('product.recover');


    Route::get('/', 'ShopkeeperController@index')->name('shopkeeper.dashboard');


    Route::get('/change-password' , 'Auth\ShopkeeperChangePasswordController@index')->name('shopkeeper.password.change');
    Route::post('change-password' , 'Auth\ShopkeeperChangePasswordController@changePassword')->name('shopkeeper.password.update');

    Route::get('/logout' , 'Auth\ShopkeeperLoginController@logout')->name('shopkeeper.logout');

    Route::post('/password/email' , 'Auth\ShopkeeperForgotPasswordController@sendResetLinkEmail')->name('shopkeeper.password.email');
    Route::get('/password/reset' , 'Auth\ShopkeeperForgotPasswordController@showLinkRequestForm')->name('shopkeeper.password.request');
    Route::post('/password/reset' , 'Auth\ShopkeeperForgotPasswordController@reset');
    Route::get('/password/reset/{token}' , 'Auth\ShopkeeperForgotPasswordController@showResetForm')->name('shopkeeper.password.reset');

    //Route::get('/orders', 'managerOrdersController@index')->name('shopkeeper.order');


   // Route::get('/customers', 'manageCustomersController@index')->name('shopkeeper.customer');


    Route::resource('category' , 'CategoryController');
    Route::resource('product' , 'ProductController');
    Route::resource('contact' , 'ContactController');
    Route::resource('about' , 'AboutController');
    Route::resource('customers' , 'manageCustomersController');
    Route::resource('orders' , 'managerOrdersController');
    Route::resource('users' , 'manageAccountsController');
    Route::resource('shopkeepers' , 'manageShopkeeperController');
    Route::resource('design' , 'DesignController');
    //Route::resource('/design' , 'AdminDesignController');
});

