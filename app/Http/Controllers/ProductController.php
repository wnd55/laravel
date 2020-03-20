<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /** Получение продукта
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $products = Product::all();

        $response["products"] = $products;
        $response["success"] = 1;

        return response()->json($response);

    }


    /**Создание продукта
     * @param ProductFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createProduct(ProductFormRequest $request)
    {

        $product = Product::create($request->all());

        return response()->json($product);
    }

    /**Изменение продукта
     * @param ProductFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProduct(ProductFormRequest $request , $id)
    {
        $product = DB::table('products')->where('id', $request->input('id'))->get();

        $product->name = $request->input('name');
        $product->manufacturer = $request->input('manufacturer');
        $product->consist = $request->input('consist');
        $product->expiration_date = $request->input('expiration_date');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        $response["products"] = $product;
        $response["success"] = 1;

        return response()->json($response);

    }

    /**Удаление продукта
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->get();

        $product->delete();

        return response()->json(" Delete success");

    }
}
