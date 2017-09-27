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
    return view('demolinks');
});

Route::get('preview', function () {
	return new App\Mail\TestMail();
});

Route::prefix('version52')->group(function () {
	Route::get('array/validation/', 'Validate@arrayValidateForm');
	Route::post('array/validation/', 'Validate@arrayValidate');
	
	Route::get('articles/{article}', function (App\Models\Articles $article) {
		//return response()->json($article, 200);
		return $article;
	});
	
	Route::get('make/auth', function() {
		return view('version52.make_auth');
	});
});

Auth::routes();

Route::prefix('version53')->group(function () {
	Route::get('echo', function() {
		return view('version53.messages');
	});
	
	Route::get('loop', 'Demo@showLoop');
	Route::get('firstorcreate/{name}', 'Demo@showFirstOrCreate');	
	Route::get('cache/{key}', 'Demo@showCacheHelper');
	Route::get('collection/where/{name}', 'Demo@showCollectionWhere');
	Route::get('json/field/example', 'Demo@showJsonFieldExample');
	Route::get('image/validation/', 'Validate@imageValidateForm');
	Route::post('image/validation/', 'Validate@imageValidate');
	Route::get('pagination', 'Demo@showPagination');
	Route::get('scout', function() {
		return view('version53.scout');
	});
	Route::get('passport', function() {
		return view('version53.passport');
	});
	Route::get('mailable', function() {
		return view('version53.mailable');
	});
	Route::get('notification', function() {
		return view('version53.notification');
	});
	Route::get('worker', function() {
		return view('version53.worker');
	});
	Route::get('vue', function() {
		return view('version53.vue');
	});
	Route::get('console', function() {
		return view('version53.console');
	});
});
	
Route::prefix('version54')->group(function () {
	Route::get('/make/controller/with/model', function() {
		return view('version54.controller');
	});
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'api', 'middleware' => 'throttle:2,1'], function () {
	Route::get('people', function () {
		return response()->json(App\Models\User::all(), 200);
	});
});

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
	Route::get('people', function () {
		return response()->json(App\Models\User::all(), 200);
	});
});

Route::get('/userpassport', function () {
	return App\Models\User::all();
})->middleware('auth:passport');
