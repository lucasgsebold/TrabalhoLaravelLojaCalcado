<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/consultaInicio', function () {
    return view('viewinicial');
});
Route::get('/consultaCliente', function () {
    return view('viewconsultacliente');
});
Route::get('/cadastroCliente', function () {
    return view('ViewCadastroCliente');
});
Route::get('/consultaVendedor', function () {
    return view('ViewConsultaVendedor');
});
Route::get('/cadastroVendedor', function () {
    return view('ViewCadastroVendedor');
});
Route::get('/consultaCalcado', function () {
    return view('ViewConsultaCalcado');
});
Route::get('/cadastroCalcado', function () {
    return view('ViewCadastroCalcado');
});
Route::get('/consultaVenda', function () {
    return view('ViewConsultaVenda');
});
Route::get('/cadastroVenda', function () {
    return view('ViewCadastroVenda');
});