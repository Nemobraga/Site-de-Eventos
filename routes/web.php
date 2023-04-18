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

Route::get('/', function () {
    $nome = 'Mateus';
    $idade = 23;
    $arr = [15,25,35,45,55];
    $nomes = ['Matheus', 'Patrick', 'Luana','Jose' ,'Henriques'];

    return view(
        'welcome',
        ['nome' => $nome, 
        'idade' => $idade, 
        'trabalho' => 'Programador',
        'arr' => $arr,
        'nomes' => $nomes
        ]);
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/produtos',function(){
    return view('products');
});

Route::get('/produtosteste/{id}',function ($id = 6){
    return view('product',['id' => $id]);
});