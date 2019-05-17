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

/*Route::get('/',function(){
		$categories = App\tbl_pages::with('children')->where('parent_id','=',0)->get();
		return view('welcome',['categories'=>$categories]);
});2leveldropdown*/

// Route::get('/admin_dashboard','HomeController@admindashboard');

Route::get('/admin_dashboard', function () {
    return view('Admin.master');
});

Route::get('/tables', 'productController@Admin_Retrieve');

 //Route::get('/tables', 'TeesController@Admin_Retrieve');


Route::delete('/delete/{id}','productController@destroy');

 //Route::delete('/delete/{id}','TeesController@destroy');
//---------------------

Route::get('/logout', function () {
    return view('/home');
});



Auth::routes();

Route::get('/','HomeController@frontmaster');
Route::get('home', 'HomeController@index')->name('home');



Route::get('publicpages/blog', function(){
	return view('publicpages.blog');
});

Route::get('publicpages/contact', function(){
	return view('publicpages.contact');
});

Route::get('publicpages/shop', function(){
	return view('publicpages.shop');
});

Route::get('categories/wdresses', 'productController@retrieve');

Route::get('categories/wtees', 'productController@fetch');

// Route::get('/wdresses','HomeController@wmproducts');

Route::get('categories/wbottom', 'productController@bottom');

//login

Route::get('/loginpage', function () {
 return view('/loginpage');
});
Route::post('/user/login','productController@login');