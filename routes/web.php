<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {

    return 'Bienvenido';
});


Route::post('/process', function (Request $request) {

    return response()->json(['amount' => $request->monto, 'currency' => $request->moneda], 200);
});

Route::post('/pay', function (Request $request) {

    return response()->json([
        'amount' => $request->monto,
        'currency' => $request->moneda,
        'callback_url' => $request->callback_url,
    ], 200);
});
