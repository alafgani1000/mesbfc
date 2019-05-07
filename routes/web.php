<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ppc\Sinter\CompileProdController;

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

// compile prod
// Route::get('bf_compile_prod/{id}', 'Ppc\Bf\CompileProdController@show');
Route::resource('bf_compile_prod', 'Ppc\Bf\CompileProdController');
Route::get('ppc/bf/prod/find', 'Ppc\Bf\CompileProdController@cari');
Route::get('bf_compile_prod/getbody/{bf_compile_prod}', 'Ppc\Bf\CompileProdController@getbody')->name('bf_compile_prod.getbody');
Route::post('bf_compile_prod/showmodal/{bf_compile_prod}', 'Ppc\Bf\CompileProdController@showmodal')->name('bf_compile_prod.showmodal');

// compile blend 
Route::resource('bf_compile_blend', 'Ppc\Bf\CompileBlendController');
Route::get('bf_compile_blend/showbpb/{bf_compile_blend}', 'Ppc\Bf\CompileBlendController@showbpb')->name('bf_compile_blend.showbpb');
Route::get('bf_compile_blend/createbpb/{bf_compile_blend}', 'Ppc\Bf\CompileBlendController@createbpb')->name('bf_compile_blend.createbpb');