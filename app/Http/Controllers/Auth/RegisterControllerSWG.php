<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterControllerSWG extends Controller
{
/**
 * @OA\Post(
 *      path="/signUp",
 *      operationId="registerUser",
 *      tags={"Auth"},
 *      summary="User's registration",
 *      description="Create a new user",
 *      @OA\RequestBody(
 *        @OA\MediaType(
 *          mediaType="application/json",
 *          @OA\Schema(
 *            @OA\Property(
 *              property="name",
 *              type="string",
 *             ),
 *            @OA\Property(
 *              property="email",
 *              type="string",
 *             ),
 *             @OA\Property(
 *              property="password",
 *              type="string",
 *             ),
 *             @OA\Property(
 *              property="confirmPassword",
 *              type="string",
 *             ),
 *             example={"name": "user", "email": "user@email.com",
  "password": "123456","confirmPassword": "123456"}
 *          )
 *        ) 
 *      ),
 *      @OA\Response(
 *          @OA\MediaType(mediaType="application/json"),
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @OA\Response(response=400, description="Bad request"),
 *       @OA\Response(
 *          response=402, 
 *          description="Missing some parameter"
 *       )
 * )
 *
 * Register a new users
 * 
*/
}
