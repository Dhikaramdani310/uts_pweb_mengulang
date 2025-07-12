<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/users",
     * tags={"Users"},
     * summary="Get all users",
     * description="Returns a list of all users. Admin only.",
     * security={{"sanctum":{}}},
     * @OA\Response(response=200, description="Successful operation"),
     * @OA\Response(response=401, description="Unauthenticated"),
     * @OA\Response(response=403, description="Forbidden")
     * )
     */
    public function index(Request $request)
    {
        // ... (kode asli tidak berubah)
    }

    /**
     * @OA\Post(
     * path="/api/login",
     * tags={"Authentication"},
     * summary="User Login",
     * description="Login User and returns an API token",
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"email", "password"},
     * @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     * @OA\Property(property="password", type="string", format="password", example="password")
     * )
     * ),
     * @OA\Response(response=200, description="Login successfully"),
     * @OA\Response(response=401, description="Email or password wrong")
     * )
     */
    public function login(Request $request)
    {
        // ... (kode asli tidak berubah)
    }

    /**
     * @OA\Post(
     * path="/api/register",
     * tags={"Authentication"},
     * summary="Register a new user",
     * description="Registers a new user. Admin only.",
     * security={{"sanctum":{}}},
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"name", "email", "password"},
     * @OA\Property(property="name", type="string", example="John Doe"),
     * @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     * @OA\Property(property="password", type="string", format="password", example="password123")
     * )
     * ),
     * @OA\Response(response=200, description="User successfully registered"),
     * @OA\Response(response=400, description="Email has already been taken"),
     * @OA\Response(response=403, description="Forbidden")
     * )
     */
    public function register(Request $request)
    {
        // ... (kode asli tidak berubah)
    }

    /**
     * @OA\Post(
     * path="/api/logout",
     * tags={"Authentication"},
     * summary="Logout user",
     * description="Logs out the current authenticated user.",
     * security={{"sanctum":{}}},
     * @OA\Response(response=200, description="Logout successfully"),
     * @OA\Response(response=401, description="Unauthenticated")
     * )
     */
    public function logout(Request $request)
    {
       // ... (kode asli tidak berubah)
    }

    /**
     * @OA\Delete(
     * path="/api/users/{id}",
     * tags={"Users"},
     * summary="Delete a user",
     * description="Deletes a specific user by ID. Admin only.",
     * security={{"sanctum":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * description="ID of the user to delete",
     * @OA\Schema(type="integer")
     * ),
     * @OA\Response(response=200, description="User deleted successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=404, description="User not found")
     * )
     */
    public function destroy($id, Request $request)
    {
        // ... (kode asli tidak berubah)
    }
}
