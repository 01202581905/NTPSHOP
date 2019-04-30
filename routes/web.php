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


Route::get('index',
	[ 'as'=> 'trang-chu',
	'uses'=>'Pagecontroller@getindex']);

Route::get('categoryproduct/{category?}',
	['as'=>'danh-sach-san-pham',
	'uses'=>'Pagecontroller@getcategoryproduct']);

Route::get('product',
	['as'=>'san-pham',
	'uses'=>'Pagecontroller@getproduct']);

Route::get('detailproduct/{idproduct?}',
	['as'=>'chi-tiet-san-pham',
	'uses'=>'Pagecontroller@getdetail']);

Route::get('register',
	['as'=>'dang-ky',
	'uses'=>'Pagecontroller@getregister']);

Route::post('register',
	['as'=>'dang-ky',
	'uses'=>'Pagecontroller@postregister']);

Route::get('login',
	['as'=>'dang-nhap',
	'uses'=>'Pagecontroller@getlogin']);

Route::post('login',
	['as'=>'dang-nhap',
	'uses'=>'Pagecontroller@postlogin']);

Route::get('contact',
	['as'=>'lien-he',
	'uses'=>'Pagecontroller@getcontact']);

Route::get('cart',
	['as'=>'gio-hang',
	'uses'=>'Pagecontroller@getcart']);

Route::get('blog',
	['as'=>'bai-viet',
	'uses'=>'Pagecontroller@getblog']);

Route::get('blogdetail/{blogid?}',
	['as'=>'chi-tiet-bai-viet',
	'uses'=>'Pagecontroller@getblogdetail']);

Route::post('commentblog',
	['as'=>'binh-luan-bai-viet',
	'uses'=>'Pagecontroller@postcommentblog']);

Route::get('about',
	['as'=>'thong-tin',
	'uses'=>'Pagecontroller@getabout']);

Route::get('addcart/{Product_ID}',
	['as'=>'them-gio-hang',
	'uses'=>'Pagecontroller@getaddcart']);

Route::post('addcart/{Product_ID}',
	['as'=>'them-gio-hang-2',
	'uses'=>'Pagecontroller@postaddcart2']);

Route::get('logout',
	['as'=>'dang-xuat',
	'uses'=>'Pagecontroller@getlogout']);

Route::get('search',
	['as'=>'tim-kiem',
	'uses'=>'Pagecontroller@getsearch']);

Route::get('delete/{Product_ID}',
	['as'=>'xoa-gio-hang',
	'uses'=>'Pagecontroller@getdelete']);

Route::post('order',
	['as'=>'dat-hang',
	'uses'=>'Pagecontroller@postorder']);

Route::post('feedback',
	['as'=>'dong-gop',
	'uses'=>'Pagecontroller@postgopy']);

Route::post('mail',
	['as'=>'g-mail',
	'uses'=>'Pagecontroller@postmail']);

Route::get('member',
	['as'=>'thanh-vien',
	'uses'=>'Pagecontroller@getmember']);

Route::get('password',
	['as'=>'mat-khau',
	'uses'=>'Pagecontroller@getpassword']);

Route::post('password',
	['as'=>'doi-mat-khau',
	'uses'=>'Pagecontroller@postrepassword']);

Route::post('changeinformation',
	['as'=>'thay-doi-thong-tin',
	'uses'=>'Pagecontroller@postinformation']);

Route::get('theorder',
	['as'=>'don-dat-hang',
	'uses'=>'Pagecontroller@getddh']);

Route::post('upload',
	['as'=>'up-load-anh',
	'uses'=>'Pagecontroller@postupload']);

Route::get('deletecart',
	['as'=>'xoa-toan-bo-gio-hang',
	'uses'=>'Pagecontroller@getdeletecart']);

Route::get('up/{Product_ID}',
	['as'=>'tang',
	'uses'=>"Pagecontroller@getup"]);

Route::get('down/{Product_ID}',
	['as'=>'giam',
	'uses'=>"Pagecontroller@getdown"]);


/////////////////////-----     ADMIN     ------------//////////////////////////

Route::get('admin',
	['as'=>'indexadmin',
	'uses'=>'Admincontroller@getindexadmin']);

Route::get('adminproduct',
	['as'=>'managerproduct',
	'uses'=>'Admincontroller@getproduct']);

Route::get('deleteproduct/{idproduct?}',
	['as'=>'deleteproduct',
	'uses'=>'Admincontroller@getdeleteproduct']);


Route::get('updateproduct/{idproduct?}',
	['as'=>'updateproduct',
	'uses'=>'Admincontroller@getupdateproduct']);

Route::get('newproduct',
	['as'=>'newproduct',
	'uses'=>'Admincontroller@getnewproduct']);

Route::get('managerblog',
	['as'=>'managerblog',
	'uses'=>'Admincontroller@getmanagerblog']);

Route::get('managerslider',
	['as'=>'managerslider',
	'uses'=>'Admincontroller@getmanagerslider']);

Route::get('deleteblogdetail/{idblog?}',
	['as'=>'deleteblogdetail',
	'uses'=>'Admincontroller@getdeleteblogdetail']);

Route::get('newblog',
	['as'=>'newblog',
	'uses'=>'Admincontroller@getnewblog']);

Route::get('deleteslider/{id?}',
	['as'=>'deleteslider',
	'uses'=>'Admincontroller@getdeleteslider']);

Route::post('newslide',
	['as'=>'newslide',
	'uses'=>'Admincontroller@postnewslide']);

Route::post('updateStatus',
	['as'=>'updateStatus',
	'uses'=>'Admincontroller@postupdateStatus']);

Route::get('loginadmin',
	['as'=>'loginadmin',
	'uses'=>'Admincontroller@getloginadmin']);

Route::post('checkloginadmin',
	['as'=>'checkloginadmin',
	'uses'=>'Admincontroller@postcheckloginadmin']);

//480 - mỗi nhà 230