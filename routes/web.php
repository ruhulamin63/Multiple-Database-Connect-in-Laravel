<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*------------------------------------------
--------------------------------------------
Getting Records of Mysql Database Connections
--------------------------------------------
--------------------------------------------*/
Route::get('/get-mysql-products', function () {
    $products = \DB::table("products")->get();
      
    dd($products);
});
  
/*------------------------------------------
--------------------------------------------
Getting Records of Mysql Second Database Connections
--------------------------------------------
--------------------------------------------*/
Route::get('/get-mysql-second-products', function () {
    $products = \DB::connection('mysql_second')->table("products")->get();
      
    dd($products);
});
