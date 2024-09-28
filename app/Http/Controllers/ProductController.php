<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $product = product::query()->with('image')->orderBy('id', 'DESC')->paginate(3);
        $data = ProductResource::collection($product);
        return view('Admin.ShowProduct')->with(['data' => $product]);
    }
}
