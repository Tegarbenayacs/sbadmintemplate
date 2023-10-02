<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/401', function () {
    return view ('sbadmin.401');
});
Route::get('/404', function () {
    return view ('sbadmin.404');
});
Route::get('/500', function () {
    return view ('sbadmin.500');
});
Route::get('/charts', function () {
    return view ('sbadmin.charts');
});
Route::get('/', function () {
    return view ('sbadmin.index');
});
Route::get('/sidenav', function () {
    return view ('sbadmin.layout-sidenav-light');
});
Route::get('/static', function () {
    return view ('sbadmin.layout-static');
});
Route::get('/login', function () {
    return view ('sbadmin.login');
});
Route::get('/password', function () {
    return view ('sbadmin.password');
});
Route::get('/register', function () {
    return view ('sbadmin.register');
});
Route::get('/tables', function () {
    return view ('sbadmin.tables');
});

