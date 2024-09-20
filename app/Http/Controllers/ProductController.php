<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function products()
    {
        $products = DB::table('products')
            ->get();
    
        return view('products.products', ['products' => $products]);
    }

    public function listByID($productCode)
    {
        $products = DB::table('products')
            ->where('productCode', $productCode)
            ->first();
    
        return view('products.viewID', ['products' => $products]);
    }
}

