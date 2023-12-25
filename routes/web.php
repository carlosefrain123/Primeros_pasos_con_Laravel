<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**TODOS:Estas son las rutas, donde se definen */
/* Route::get('/ruta', function () {
    return "Hola soy una ruta";
}); */
/**TODO: Esta ruta recibe una ID */
/* Route::get('/nombre/{nombre}', function ($nombre) {
    return "Hola soy una ruta ".$nombre;
}); */
/**Solo permite en la URL palabras*/
/* Route::get('/nombre/{name}', function (string $name) {
    return "Hola soy una ruta ".$name;
})->where('Hola soy ', '[A-Za-z]+'); */
/**Solo permite en la URL números*/
/* Route::get('/user/{id}', function (string $id) {
    // ...
})->where('id', '[0-9]+'); */
/**Solo permite en la URL números y palabras*/
/* Route::get('/user/{id}/{name}', function (string $id, string $name) {
    // ...
})->where(['Hola mi nombre es' => '[0-9]+', 'name' => '[a-z]+']); */

/* //TODO: Se redirige
Route::redirect('/publicaciones', 'http://localhost/laravelA/public/articulos');
Route::get('articulos', function () {
    return "Hola estoy en la ruta artículos";
}); */

/* ================== */
//TODO: Se coloca nombre a la URL completa
/* Route::get('/ruta', function () {
    return "Hola soy una ruta";
})->name('operacion'); */

Route::namespace('Admin')-> group(function () {
    Route::get('/micontroller1', [AdminController::class, 'index1']);
    Route::get('/micontroller2', [AdminController::class, 'index2']);
    Route::get('/micontroller3', [AdminController::class, 'index3']);
});

Route::prefix('seccion')->group(function () {
    Route::get('/primera',function(){
        return 'Primera...';
    });
    Route::get('/segunda',function(){
        return 'Segunda...';
    });
    Route::get('/tercera',function(){
        return 'Tercer...';
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
