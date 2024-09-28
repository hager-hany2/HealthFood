<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\product;
use Illuminate\Http\Request;

class ClientShopController extends Controller
{
    public function shop()
    {
        $product = product::query()->with('image')->orderBy('id', 'DESC')->paginate(12);
        $data = ProductResource::collection($product);
        return view('shop')->with(['data' => $product]);
    }
}
