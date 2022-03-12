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
    return view ('avisos', ['nome'=> 'Luis', 'mostrar'=>true, 'avisos'=>[['id'=> 1, 'aviso'=> 'BLA BLA BLA BLA BLA BLA'],
                                                                        ['id'=> 2, 'aviso'=> 'Agora é hora de aventura'],
                                                                        ['id'=> 3, 'aviso'=> 'A ordem dos fatores n muda bla bla bla']]]);
});

Route::get('/notificaçao', function(){
    return view ('notificaçao', ['nome'=> 'Luis Felipe', 'mostrar'=>true, 'notificaçao'=>[['id'=> 1, 'aviso'=> 'Não esqueça da autoescola Segunda'],
                                                                        ['id'=> 2, 'aviso'=> 'Comece a Estudar mais'],
                                                                        ['id'=> 3, 'aviso'=> 'Essa aula foi produtiva']]]);
});


