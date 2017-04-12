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
Route::get('/','HomeController@getHome');
Route::get('viewproduct/{id}','HomeController@getDetails');
Route::post('viewproduct/{id}','HomeController@postComment');
Route::get('forgotPassword','Auth\ForgotPasswordController@getForgotPass');
Route::group(['prefix'=>'Cart'], function() {
    Route::get('add/{id}','CartController@getAdd');
    Route::get('show', 'CartController@getCart');
    Route::get('delete/{id}','CartController@deleteCart');
    Route::get('update', 'CartController@getUpdate');
    Route::post('email',['as'=>'postEmail','uses'=>'CartController@postEmail']);
    Route::get('done','CartController@getDone');
});
/*Route::get(['namespace'=>'Fontend'], function() {
    Route::get('','HomeController@getHome');
});*/
Route::group(['namespace' => 'Admin'], function () {
	Route::group(['prefix' => 'admincp','middleware'=>'CheckAdmin'], function () {
		Route::get('/','LoginController@getLogin');
		Route::post('postLogin',['as'=>'postLogin','uses'=>'LoginController@postLogin']);
	});
	Route::group(['prefix'=>'admincp','middleware'=>'CheckLogin'],function(){
		Route::get('index','UserController@getHome');
		Route::get('products','ProductController@getProducts');
		Route::get('logout','LoginController@Logout');
		Route::group(['prefix'=>'category'],function(){
			Route::get('/','CateController@getCategory');
			Route::get('add','CateController@getAddCaterory');
			Route::post('postAddCate',['as'=>'postAddCate','uses'=>'CateController@PostaddCaterory']);
			Route::get('delete/{id}','CateController@deleteCategory');
			Route::get('edit/{id}','CateController@getEditCategory');
			Route::post('edit/{id}','CateController@postEditCategory');

		});
		Route::group(['prefix'=>'user'],function(){
			Route::get('/','UserController@getUsers');
			Route::get('add','UserController@getAddUser');
			Route::post('postAddUser',['as'=>'postAddUser','uses'=>'UserController@postAddUser']);
			Route::get('delete/{id}','UserController@deleteUser');
			Route::get('edit/{id}','UserController@getEditUser');
			Route::post('edit/{id}','UserController@postEditUser');
		});
		Route::group(['prefix'=>'comment'],function(){
			Route::get('/','CommentController@getComment');
			Route::get('delete/{id}','CommentController@deleteComment');
		});
		Route::group(['prefix'=>'products'],function(){
			Route::get('add','ProductController@getAddProduct');
			Route::post('postAddProduct',['as'=>'postAddProduct','uses'=>'ProductController@postAddProduct']);
			Route::get('delete/{id}','ProductController@deleteProduct');
			Route::get('edit/{id}','ProductController@getEditProduct');;
			Route::post('edit/{id}','ProductController@postEditProduct');
		});
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
