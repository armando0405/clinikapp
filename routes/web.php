<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\LoginController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    if(Auth::check()){
        return redirect()->route('doctores.index');
    }else{
        return view('login');
    }
        
})->name('login');

Route::get('/registrarse', function () {
    return view('registrarse');
})->name('registrarse');




//Auth se usa p[ara si esta logueado pueda entrar a estas rutas]
Route::middleware(['auth'])->group(function () {

    route::resource('citas',CitaController::class);
    route::resource('pacientes',PacienteController::class);
    route::resource('doctores',DoctorController::class);
    route::resource('consultorios',ConsultorioController::class);
    
    /* RUTAS PARA ACTUALIZAR ESTADO DE 0 A 1 
    /doctores: Prefijo de la URL que indica el recurso principal (en este caso, los doctores).
    {id}: Es un placeholder dinámico que representa el identificador único de un doctor en la base de datos. Laravel extraerá este valor de la URL y lo pasará al controlador.
    /desactivate: Segmento adicional que describe la acción específica que se desea realizar sobre el recurso. En este caso, "desactivar".
    CONTROLLADOR 
    
    DoctorController::class: Especifica que el controlador responsable de manejar esta ruta es DoctorController.
    'desactivate': Método dentro del controlador DoctorController que será ejecutado cuando esta ruta sea llamada. Este método contendrá la lógica para cambiar el estado del doctor.
    */
    Route::put('/doctores/{id}/desactivate', [DoctorController::class, 'desactivate'])->name('doctores.desactivate');
    Route::put('/pacientes/{id}/desactivate', [PacienteController::class, 'desactivate'])->name('pacientes.desactivate');
    Route::put('/citas/{id}/desactivacion', [CitaController::class, 'desactivacion'])->name('citas.desactivacion');
    /*ver historial pacinete */
    Route::get('/pacientes/{id}/view', [PacienteController::class, 'historialpaciente'])->name('pacientes.historialpaciente');

    // Route::get('/', function () {
    //     return view('doctores.index');
    // });

    Route::get('/', [DoctorController::class, 'index']);

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/logout', function() {
        Auth::logout(); 
        return redirect('login');
    });

}); //final de agrupamiento de las routes


Route::post('register',[LoginController::class, 'register']);
Route::post('check',[LoginController::class, 'check'])->name('check');



