<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Models\Lead;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function() {
    return view('index');
});
 */

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('root');
    Route::get('empresas', 'empresas')->name('empresas');
    Route::get('nosotros', 'nosotros')->name('nosotros');
    Route::get('contacto', 'contacto')->name('contacto');
    Route::get('capacitaciones', 'capacitaciones')->name('capacitaciones');
    Route::get('cuestionario', 'cuestionario')->name('cuestionario');
    Route::get('licenciaturas', 'licenciaturas');
    Route::get('maestrias', 'maestrias');
    Route::get('doctorado', 'doctorado');
});


Route::controller(LeadController::class)->group(function(){

    Route::post('contacto-exitoso', 'contactando')->name('contacto-exitoso');
    Route::post('aceptar-lead', 'Aceptarlead')->name('aceptar-lead');
    Route::get('conexiones-aceptadas', 'conexionesAceptadas')->name('conexiones-aceptadas');
});
/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/dashboard', function () {

    $new_leads = Lead::query()->where('aceptado', false)->get();
    return view('Admin.dashboard', compact('new_leads'));

})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
