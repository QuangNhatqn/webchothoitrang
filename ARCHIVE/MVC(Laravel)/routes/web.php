<?php
use App\USERs;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('thu', function() {
//     $users = USERs::find(2);
//     foreach ($users->servicetradings as $servicetradings) {
//     	echo $servicetradings->PostingIDs."<br>";
//     }
//     echo $users->FullNames;
// });

// Route::get('thu1', function() {
//     return view('admin.users.sua');
// });

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'users'], function()
	{
		Route::get('danhsach', 'usersController@getDanhSach');

		Route::get('sua/{id}', 'usersController@getSua');
		Route::post('sua/{id}', 'usersController@postSua');

		Route::get('xoa/{id}', 'usersController@getXoa');
		});

	Route::group(['prefix'=>'postings'], function()
	{
		Route::get('danhsach', 'postingsController@getDanhSach');
		
		Route::get('sua/{id}', 'postingsController@getSua');
		Route::post('sua/{id}', 'postingsController@postSua');

		Route::get('xoa/{id}', 'postingsController@getXoa');

		Route::get('dsduyettin', 'postingsController@getDSDuyetTin');
		Route::get('duyet/{id}', 'postingsController@getDuyet');
	});

	Route::group(['prefix'=>'cointradings'], function()
	{
		Route::get('danhsach', 'cointradingsController@getDanhSach');

		Route::get('sua', 'cointradingsController@getSua');

		Route::get('xoa/{id}', 'cointradingsController@getXoa');
	});
	
	Route::group(['prefix'=>'services'], function()
	{
		Route::get('danhsach', 'servicesController@getDanhSach');

		Route::get('sua/{id}', 'servicesController@getSua');
		Route::post('sua/{id}', 'servicesController@postSua');
	});

	Route::group(['prefix'=>'servicetradings'], function()
	{
		Route::get('danhsach', 'servicetradingsController@getDanhSach');

		Route::get('sua/{id}', 'servicetradingsController@getSua');
		Route::post('sua/{id}', 'servicetradingsController@postSua');
		Route::get('xoa/{id}', 'servicetradingsController@getXoa');
	});

});
Route::group(['prefix'=>'customer'], function()
{
	Route::group(['prefix'=>'trangchu'], function(){
		Route::get('trangchu', 'trangchuController@getTrangChu');
	});
});

Route::group(['prefix'=>'customer'], function()
{
	Route::group(['prefix'=>'danhmuc'], function(){
		Route::get('danhsach/{Categorys}', 'danhmucController@getDanhSach');

		Route::get('chitiet/{id}', 'danhmucController@getChiTiet');
	});
});