<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class _SiteController extends Controller
{
    public function  __invoke()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function admin()
    {
        return view('admin.index');
    }
}
