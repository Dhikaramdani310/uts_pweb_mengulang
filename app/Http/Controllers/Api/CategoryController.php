<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/categories",
     * tags={"Categories"},
     * summary="Get all categories",
     * description="Returns a list of all categories. Admin only.",
     * security={{"sanctum":{}}},
     * @OA\Response(response=200, description="Successful operation"),
     * @OA\Response(response=403, description="Forbidden")
     * )
     */
    public function index(Request $request)
    {
        // ... 
    }

    /**
     * @OA\Post(
     * path="/api/categories",
     * tags={"Categories"},
     * summary="Create a new category",
     * description="Creates a new category. Admin only.",
     * security={{"sanctum":{}}},
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"name"},
     * @OA\Property(property="name", type="string", example="Elektronik")
     * )
     * ),
     * @OA\Response(response=201, description="Category added successfully"),
     * @OA\Response(response=403, description="Forbidden")
     * )
     */
    public function store(Request $request)
    {
        // ... 
    }

    /**
     * @OA\Put(
     * path="/api/categories/{id}",
     * tags={"Categories"},
     * summary="Update a category",
     * description="Updates a category by ID. Admin only.",
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
     * required={"name"},
     * @OA\Property(property="name", type="string", example="Fashion")
     * )
     * ),
     * @OA\Response(response=200, description="Category updated successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=404, description="Category not found")
     * )
     */
    public function update(Request $request, $id)
    {
        // ... 
    }

    /**
     * @OA\Delete(
     * path="/api/categories/{id}",
     * tags={"Categories"},
     * summary="Delete a category",
     * description="Deletes a category by ID. Admin only.",
     * security={{"sanctum":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * @OA\Schema(type="integer")
     * ),
     * @OA\Response(response=200, description="Category deleted successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=404, description="Category not found")
     * )
     */
    public function destroy($id, Request $request)
    {
        // ... 
    }
}
