<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-03-20
 * Time: 09:56
 */
class AdminProducts extends Controller
{

    private $products;

    public function __construct(Product $product)
    {
        $this->products = $product;
    }

    public function index()
    {
        $products = $this->products->all();

        return view('products', compact('products'));
    }
}
