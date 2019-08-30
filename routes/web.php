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
//     return redirect('');

// });
Route::get('/',function(){
$blog = App\Blog::all();
return view('homee',['blog' => $blog]);
});
Route::get('/pajak1',function(){
	return view('pajak1');
});
Route::get('/pajak2',function(){
	return view('pajak2');
});
Route::get('/pajak3',function(){
	return view('pajak3');
});
Route::get('/pajak4',function(){
	return view('pajak');
});
Route::get('/pajak5',function(){
	return view('pajak5');
});
Route::get('/unit',function(){
	return view('unit');
});
Route::get('/penjabat',function(){
	return view('penjabat');
});
Route::get('/struktur',function(){
	return view('struktur');
});
Route::get('/homee',function(){
	return view('homee');

});
Route::get('/berhasil',function(){
	return view('berhasil');
});
Route::get('/batal/{id}','BlogController@destroy')->name('batal');

Auth::routes();
Route::resource('/admin', 'BlogController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show/{id}', 'BlogController@show')->name('details');
Route::get('/delete/{id}','BlogController@delete')->name('delete');
Route::get('/edit/{id}', 'BlogController@edit')->name('edit');
Route::post('/update/{id}','BlogController@update')->name('update');
