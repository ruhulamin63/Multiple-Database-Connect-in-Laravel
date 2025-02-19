<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getRecord()
    {
        $products = Product::get();
        return $products;
    }

    public function getRecordSecond()
    {
        $products = Product::on('mysql_second')->get();
        return $products;

        // $product = new Product;
        // $product->setConnection('mysql_second');
        // $something = $product->find(1);
        // return $something;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function storeRecord()
    {
        $product = new Product;
        $product->name = 'Product 1';
        $product->price = 100;
        $product->save();

        return 'Product has been created!';
    }
}
