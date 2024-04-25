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

Route::get('/about', function () {
    $nama = "Berudu";
    $jk = "Prempwan";
    $almt = "Cupi";
    $pnddkn = "TPQ";
    $pkrjn = "Tukang Lekdut";
    return view('biodata', compact('nama','jk','almt','pnddkn','pkrjn'));
});
Route::get('/home', function () {
    return view('biodata2');
});
Route::get('/kontak', function () {
    return view('biodata3');
});
Route::get('/about2/{nama}/{jk}/{almt}/{pnddkn}/{pkrjn}', function (Request $request, $nama, $jk, $almt, $pnddkn, $pkrjn) {
    $nama3 = $nama;
    $jk3 = $jk;
    $almt3 = $almt;
    $pnddkn3 = $pnddkn;
    $pkrjn3 = $pkrjn;
    return view('param' , compact('nama3','jk3','almt3','pnddkn3','pkrjn3'));
});