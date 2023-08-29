<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// return view
Route::get('/',  [HomeController::class, 'index']);
// Route::get('/', 'HomeController@index'); // Check

Route::get('/test', function () {
    return view('test', [
        'title' => 'Platzi Laravel Course!!'
    ]);
});

// return Text/string
// Route::get('/test', function () {
//     return 'Hello World!';
// });

// return json
// Route::get('/test', function () {
//     return [
//         'saludo' => 'Hello',
//         'nombre' => 'World!'
//     ];
// });
