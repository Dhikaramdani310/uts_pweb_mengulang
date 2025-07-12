<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/products",
     * tags={"Products"},
     * summary="Get all products",
     * description="Returns a list of all products.",
     * security={{"sanctum":{}}},
     * @OA\Response(response=200, description="Successful operation"),
     * @OA\Response(response=401, description="Unauthenticated")
     * )
     */
    public function index(Request $request)
    {
        // ... 
    }

    /**
     * @OA\Post(
     * path="/api/products",
     * tags={"Products"},
     * summary="Create a new product",
     * description="Creates a new product.",
     * security={{"sanctum":{}}},
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"name", "description", "price", "image", "category_id"},
     * @OA\Property(property="name", type="string", example="Laptop Pro"),
     * @OA\Property(property="description", type="string", example="Laptop canggih untuk profesional"),
     * @OA\Property(property="price", type="integer", example=15000000),
     * @OA\Property(property="image", type="string", example="https://example.com/image.jpg"),
     * @OA\Property(property="category_id", type="integer", example=1)
     * )
     * ),
     * @OA\Response(response=200, description="Product added successfully"),
     * @OA\Response(response=404, description="Category not found")
     * )
     */
    public function store(Request $request)
    {
        // ... 
    }

    /**
     * @OA\Put(
     * path="/api/products/{id}",
     * tags={"Products"},
     * summary="Update a product",
     * description="Updates a product by ID.",
     * security={{"sanctum":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"name", "description", "price", "image", "category_id", "expired_date"},
     * @OA\Property(property="name", type="string", example="Laptop Pro Max"),
     * @OA\Property(property="description", type="string", example="Laptop lebih canggih untuk profesional"),
     * @OA\Property(property="price", type="integer", example=20000000),
     * @OA\Property(property="image", type="string", example="https://example.com/image_new.jpg"),
     * @OA\Property(property="category_id", type="integer", example=1),
     * @OA\Property(property="expired_date", type="string", format="date", example="2027-12-31")
     * )
     * ),
     * @OA\Response(response=200, description="Product updated successfully"),
     * @OA\Response(response=404, description="Product or Category not found")
     * )
     */
    public function update(Request $request, $id)
    {
        // ... 
    }

    /**
     * @OA\Delete(
     * path="/api/products/{id}",
     * tags={"Products"},
     * summary="Delete a product",
     * description="Deletes a product by ID.",
     * security={{"sanctum":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * @OA\Schema(type="integer")
     * ),
     * @OA\Response(response=200, description="Product deleted successfully"),
     * @OA\Response(response=404, description="Product not found")
     * )
     */
    public function destroy(Request $request, $id)
    {
        // ... 
    }
}
