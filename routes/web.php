<?php
use App\Http\Controllers\Admin\EncuestaController as AdminEncuestaController;/*se agrega*/
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;/* se agrega*/
use App\Http\Controllers\Admin\ResultadoController;/*se agrega*/

Route::get('/', function () {
    return view('index');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

                /* Rutas para el formulario index*/
 Route::get('/encuesta', [EncuestaController::class, 'index'])->name('index');

            /*rutas para guardar las respuesta de la encuesta*/ 
  Route::post('/encuesta', [EncuestaController::class, 'store'])->name('encuesta.store');

              /*rutas para ver la pagina de agredecimientos*/
 Route::view('/gracias', 'gracias')->name('gracias');


              /*Panel Administrativo de las encuesta*/
   Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
     // /* ruta para gestionar encuesta*/ 

    Route::resource('encuestas', AdminEncuestaController::class); 

     /*ruta para activar encuesta*/ 

    Route::patch('encuestas/{encuesta}/activar',[AdminEncuestaController::class,'activar'])->name('encuestas.activar');

 /*rutas para desactivar encuesta*/ 

    Route::patch('encuestas/{encuesta}/desactivar',[AdminEncuestaController::class,'desactiva'])->name('encuestas.desactivar');

    /*ruta para ver resultados de todas las encuesta*/ 

    Route::get('/resultado',[ ResultadosController::class, 'index'])->name('resultados.index');
});