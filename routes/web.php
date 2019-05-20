<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Ppc\Sinter\CompileProdController;

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



Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('bf_compile_prod', 'Ppc\Bf\CompileProdController');
    Route::get('bf_compile_prod/send/{prod_no}', 'Ppc\Bf\CompileProdController@send')->name('bf_compile_prod.send');

    Route::resource('bf_compile_blend', 'Ppc\Bf\CompileBlendController');
    Route::resource('bf_compile_material', 'Ppc\Bf\CompileMaterialController');
    Route::resource('bf_compile_iron', 'Ppc\Bf\CompileIronController');

    Route::resource('sinter_prod', 'Ppc\Sinter\CompileProdController');
    Route::resource('sinter_blend', 'Ppc\Sinter\CompileBlendController');
    Route::resource('sinter_material', 'Ppc\Sinter\CompileMaterialController');

    Route::resource('cop_prod', 'Ppc\Coking\CompileProdController');
    Route::resource('cop_blend', 'Ppc\Coking\CompileBlendController');
    Route::resource('cop_material', 'Ppc\Coking\CompileMaterialController');

    Route::resource('yard_blend', 'Ppc\Stockyard\CompileBlendingController');


    Route::get('bf_tapping/showLadleIn/{iron_no}', 'Bfc\OperationController@showLadleIn')->name('bf_tapping.showLadleIn');
    Route::resource('bf_tapping', 'Bfc\OperationController');
    // Route::resource('bf_ladle_in', 'Bfc\LadleInController');

});
