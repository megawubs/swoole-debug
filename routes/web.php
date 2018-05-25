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

use Illuminate\Support\Facades\DB;

Route::get('/1', function () {
    $result = \App\Entities\AbsenceReasons\AbsenceReason::all();

    return response()->json($result);
});


Route::get('/2', function () {
    $result = DB::table('absence_reasons')->select('absence_reasons.*')->get();

    return response()->json($result);
});
