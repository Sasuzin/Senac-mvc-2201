<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function(){
    return view ('exercicio.avisos', ['nome'=> 'Matheus', 'mostrar'=>true, 'avisos'=>[['id'=> 1, 'aviso'=> 'BLA BLA BLA BLA BLA BLA'],
                                                                        ['id'=> 2, 'aviso'=> 'Agora é hora de aventura'],
                                                                        ['id'=> 3, 'aviso'=> 'A ordem dos fatores n muda bla bla bla']]]);
});

Route::get('/notificaçao', function(){
    return view ('notificaçao', ['nome'=> 'Matheus Kross', 'mostrar'=>true, 'notificaçao'=>[['id'=> 1, 'aviso'=> 'Não esqueça da autoescola Segunda'],
                                                                        ['id'=> 2, 'aviso'=> 'Comece a Estudar mais'],
                                                                        ['id'=> 3, 'aviso'=> 'Essa aula foi produtiva']]]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('clientes')->group(function(){

    Route::get('listar',
        [App\Http\Controllers\ClientesController::class,'listar']
        )->middleware('auth'); // quando chamar essa rota ele deve chamar o controller
});

Route::group(['middleware' => ['auth']], function(){
    Route::resource('/users', App\Http\Controllers\userController::class);
    Route::resource('/roles', App\Http\Controllers\RoleController::class);
    Route::resource('/clients',App\Http\Controllers\ClientesController::class);
    // protegendo as rotas de autenticação
});
