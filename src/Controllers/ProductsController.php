<?php

namespace Recruitment\Products\Controllers;

use Illuminate\Http\Request;
use Recruitment\Products\Models\Product;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{

    public function showAvailable(): \Illuminate\Http\JsonResponse
    {

        $products = Product::all()->where('amount', '>', 0);
        if (empty($products))
        {

        }
        else
        {
            return response()->json([
                'data' => $products
            ], 200);
        }


    }

    public function showUnavailable(): \Illuminate\Http\JsonResponse
    {
        $products = Product::all()->where('amount', 0);
        return response()->json([
            'data' => $products
        ], 200);
    }

    public function showPlentyAvailable(): \Illuminate\Http\JsonResponse
    {
        $products = Product::all()->where('amount', '>', 5);
        return response()->json([
            'data' => $products
        ], 200);
    }

    public function deleteProduct($id): \Illuminate\Http\JsonResponse
    {
        $p = Product::find($id);
        $p->delete();

        return response()->json(null, 204);
    }

    public function addProduct(Request $request): \Illuminate\Http\JsonResponse
    {
        $p = new Product();
        $p->create($request->all());

        return response()->json(null, 204);
    }

    public function updateProduct(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $p = Product::find($id);
        $p->update($request->all());

        return response()->json($p, 200);
    }
}
