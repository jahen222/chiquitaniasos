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

Route::get('/home', 'IndexController@index');
Route::get('/', 'BlogController@index')->name('home');

Auth::routes();

/**
 * Cart - Session ( show, add, delete )
 */

Route::get('/cart','CartController@showProducts');
Route::post('/cart/add/{product}','CartController@addProduct');

Route::delete('/cart/delete/products','CartController@deleteAllProducts');
Route::delete('/cart/delete/{product}','CartController@deleteProduct');

Route::post('/cart/products/{product}/quantity', 'CartController@setQuantity');

/**
 * Checkout your products
 */
Route::get('/checkout', 'OrderController@showCheckout');

/**
 * Make orders
 */
Route::get('/placeAnOrder', 'OrderController@showPlaceAnOrder');
Route::post('/placeAnOrder', 'OrderController@store');

/**
 * Order was made, thanks for purchase
 */
Route::get('/madeAnOrder', 'OrderController@showMadeAnOrder');

/**
 * Admin routes, protected by middleware
 */
Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix'=>'admin'], function () {

    Route::get('/', 'IndexController@index');
    Route::get('/users', 'UserController@index');

    /**
     * CRUD products
     */
    Route::resource('categories', 'CategoryController');
    Route::resource('subcategories', 'SubcategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('events', 'EventController');
    Route::resource('blogs', 'BlogController');

    Route::get('/orders', 'OrderController@index');
    Route::get('/orders/pending', 'OrderController@indexPending');
    Route::get('/orders/preparingToSend', 'OrderController@indexPreparingToSend');
    Route::get('/orders/waitingForPayment', 'OrderController@indexWaitingForPayment');
    Route::get('/orders/send', 'OrderController@indexSend');
    Route::get('/orders/completed', 'OrderController@indexCompleted');

    /**
     * Change orders status
     */
    Route::put('/orders/{order}/update/status', 'OrderController@updateStatus');

    /**
     * Change quantity of products
     */
    Route::put('/products/{product}/update/quantity', 'ProductController@changeQuantity');

    Route::get('/settings/home', 'SettingController@getHome');
    Route::post('/settings/home/{id}', 'SettingController@putHome');

    Route::get('/settings/service', 'SettingController@getService');
    Route::post('/settings/service/{id}', 'SettingController@putService');

    Route::get('/settings/company', 'SettingController@getCompany');
    Route::post('/settings/company/{id}', 'SettingController@putCompany');

    Route::get('/settings/blog', 'SettingController@getBlog');
    Route::post('/settings/blog/{id}', 'SettingController@putBlog');

    Route::get('/settings/contact', 'SettingController@getContact');
    Route::post('/settings/contact/{id}', 'SettingController@putContact');

    Route::get('/settings/faq', 'SettingController@getFaq');
    Route::post('/settings/faq/{id}', 'SettingController@putFaq');

    Route::get('/settings/footer', 'SettingController@getFooter');
    Route::post('/settings/footer/{id}', 'SettingController@putFooter');

});


/*
 * User Routes
 */
Route::group(['prefix' => 'users'], function () {

    /*
     * Personal data panel
     */
    Route::get('/{user}/personalData', 'UserController@showPersonalData');
    Route::get('/{user}/getPersonalData', 'UserController@getPersonalData');
    Route::put('/{user}/update/personalData', 'UserController@updatePersonalData');

    /*
     * Settings panel
     */
    Route::get('/{user}/settings', 'UserController@showSettings');
    Route::put('/{user}/update/username', 'UserController@updateUsername');
    Route::put('/{user}/update/password', 'UserController@updatePassword');
    Route::put('/{user}/update/email', 'UserController@updateEmail');
    Route::delete('/{user}/delete', 'UserController@delete');

    /*
     * Orders panel
     */
    Route::get('/{user}/orders','UserController@showOrders');

    /*
     * Sorting orders
     */

    Route::get('/{user}/orders/pending', 'UserController@showPendingOrders');
    Route::get('/{user}/orders/preparingToSend', 'UserController@showPreparingToSendOrders');
    Route::get('/{user}/orders/waitingForPayment', 'UserController@showWaitingForPaymentOrders');
    Route::get('/{user}/orders/send', 'UserController@showSendOrders');
    Route::get('/{user}/orders/completed', 'UserController@showCompletedOrders');

});

/*
 * Products Routes
 */
Route::group(['prefix' => 'products'], function () {

    /**
     * Search products
     */
    Route::post('/search', 'ProductController@search')->name('search');

    Route::get('/{product}', 'ProductController@show');

    Route::get('/compare/{product}', 'ProductController@compare');
});

/**
 * Categories, Subcategories, products, filtration
 */

Route::get('/categories/{category}/products', 'CategoryController@showAllProducts');
Route::get('/categories/{category}/products/prices/ascending', 'CategoryController@showAllProductsByPriceAscending');
Route::get('/categories/{category}/products/prices/descending', 'CategoryController@showAllProductsByPriceDescending');

Route::get('/subcategories/{subcategory}/products', 'SubcategoryController@showAllProducts');
Route::get('/subcategories/{subcategory}/products/prices/ascending', 'SubcategoryController@showAllProductsByPriceAscending');
Route::get('/subcategories/{subcategory}/products/prices/descending', 'SubcategoryController@showAllProductsByPriceDescending');

Route::post('/products/{product}/reviews/add', 'ReviewController@store');

/**
 * Info pages
 */

Route::get('/service', 'InfoController@service')->name('service');
Route::get('/aboutUs', 'InfoController@aboutUs')->name('aboutUs');
Route::get('/contact', 'InfoController@contact')->name('contact');
Route::get('/faq', 'InfoController@faq')->name('faq');

Route::get('/termsAndConditions', function () {
    return view('info.terms_and_conditions');
})->name('termsAndConditions');

/**
 * Newsletter subscribe
 */
Route::post('/subscribe', 'SubscribeController@store');

/**
 * Store
 */
Route::get('/store', 'StoreController@index')->name('store');

/**
 * Blog
 */
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{blog}', 'BlogController@show')->name('blog.show');

/**
 * Comment
 */
Route::post('/blog/{blog}/comments/add', 'CommentController@store');
Route::delete('/comment/{comment}/destroy', 'CommentController@destroy');
Route::put('/comment/{id}/update', 'CommentController@update');


/**
 * Login Google and facebook
 */
Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

/**
 * Paypal
**/
Route::post('/payWithpaypal', 'PaymentController@payWithpaypal')->name('payWithpaypal');
Route::get('/getPaymentStatus', 'PaymentController@getPaymentStatus')->name('getPaymentStatus');
Route::get('/getCancelStatus', 'PaymentController@getCancelStatus')->name('getCancelStatus');
