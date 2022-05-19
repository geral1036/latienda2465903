<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//primera ruta
Route::get('hola', function(){
    echo "hola 2434534";
});

//ruta de arereglos:
Route::get('arreglo', function(){

    $estudiantes =[
        "CA" => "Carlos",
        "JO" => "Jose",
        "AN" => "Ana",
    ];
   //recorre
   foreach($estudiantes as $e){
       echo $e. "<hr />";
   }
   //agregar elementosa
   $estudiantes ["CR"] ="Cristian";

});
Route::get('paises', function(){
    //arreglo paises
    $paises = [
        "Colombia" => [
            "capital" => "Bogotá",
            "moneda" => "Peso",
            "población" => 51,
            "ciudades" => [
                "Medellín",
                "Cali",
                "Barranquilla"
            ]
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "población" => 32,
            "ciudades" => [
                "Arequipa",
                "Cusco"
            ]
        ],
        "Paraguay" => [
            "capital" => "Asunción",
            "moneda" => "Guaraní paraguayo",
            "población" => 7,
            "ciudades" => [
                "Luque"
            ]
        ],
        "Francia" => [
            "capital" => "Paris",
            "moneda" => "Euro",
            "población" => 67,
            "ciudades"=>["marsella"]
        ],
       
    ];

    //
    
    return view( 'paises')->with("paises", $paises);

});


Route::get('prueba' , function(){
    return view('layouts.menu');
});


Route::get('prueba' , function(){
    return view('producto.new');
});

Route::resource('productos',ProductController::class);

