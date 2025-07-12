<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 * version="1.0.0",
 * title="UTS PWEB API Documentation",
 * description="API Documentation for Ujian Tengah Semester Pemrograman Web Lanjut",
 * @OA\Contact(
 * email="admin@example.com"
 * )
 * )
 *
 * @OA\Server(
 * url=L5_SWAGGER_CONST_HOST,
 * description="Demo API Server"
 * )
 *
 * @OA\SecurityScheme(
 * securityScheme="sanctum",
 * type="http",
 * scheme="bearer",
 * bearerFormat="JWT"
 * )
 */
abstract class Controller
{
    //
}
