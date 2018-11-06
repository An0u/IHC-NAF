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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/visitante', function () {
    return view('visitante');
})->name('visitante');

Route::get('/atendente', function () {
    return view('atendente');
})->name('atendente');

Route::get('/agendamento-atendente', function () {
    return view('agendamento_atendente');
})->name('agendamentos-atendente');

Route::get('/servicos-atendente', function () {
    return view('servicos_atendente');
})->name('servicos-atendente');

Route::get('/calendario-atendente', function () {
    return view('calendario_atendente');
})->name('calendario-atendente');

Route::get('/mesa-atendente', function () {
    return view('mesa_atendente');
})->name('mesa-atendente');

Route::get('/situacao-atendente', function () {
    return view('situacao_atendente');
})->name('situacao-atendente');

Route::get('/meusagendamentos', function () {
    return view('agendamento');
})->name('agendamentos');

Route::get('/meusagendamentos/novo', function () {
    return view('novoagendamento');
})->name('novoagendamento');

Route::get('/avaliar', function () {
    return view('avaliacao');
})->name('avaliar');

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');

Route::get('/administracao', function () {
    return view('administracao');
})->name('administracao');

Route::get('/paginainicial', function () {
    return view('paginainicial');
})->name('paginainicial');