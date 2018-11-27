<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'cliente'], function () {
    Route::get('', 'ControllerCliente@getAllClientes');
    Route::get('{id}', 'ControllerCliente@getCliente');
    Route::post('', 'ControllerCliente@saveCliente');
    Route::put('{id}', 'ControllerCliente@updateCliente');
    Route::delete('{id}', 'ControllerCliente@deleteCliente');
});

Route::group(['prefix' => 'vendedor'], function () {
    Route::get('', 'ControllerVendedor@getAllVendedores');
    Route::get('{id}', 'ControllerVendedor@getVendedor');
    Route::post('', 'ControllerVendedor@saveVendedor');
    Route::put('{id}', 'ControllerVendedor@updateVendedor');
    Route::delete('{id}', 'ControllerVendedor@deleteVendedor');
});

Route::group(['prefix' => 'calcado'], function () {
    Route::get('', 'ControllerCalcado@getAllCalcados');
    Route::get('{id}', 'ControllerCalcado@getCalcado');
    Route::post('', 'ControllerCalcado@saveCalcado');
    Route::put('{id}', 'ControllerCalcado@updateCalcado');
    Route::delete('{id}', 'ControllerCalcado@deleteCalcado');
});

Route::group(['prefix' => 'venda'], function () {
    Route::get('', 'ControllerVenda@getAllVendas');
    Route::get('{id}', 'ControllerVenda@getVenda');
    Route::post('', 'ControllerVenda@saveVenda');
    Route::put('{id}', 'ControllerVenda@updateVenda');
    Route::delete('{id}', 'ControllerVenda@deleteVenda');
});
