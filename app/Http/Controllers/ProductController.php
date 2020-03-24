<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helpers;
use App\Http\Resources\Product as ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = ProductResource::collection(Product::all());
//        return Helpers::formatResponse(0, $data, 'Thành công');
        return response()->json([
            'errorCode' => 0,
            'message' => 'Thành công',
            'data' => $data
        ]);
    }
}
