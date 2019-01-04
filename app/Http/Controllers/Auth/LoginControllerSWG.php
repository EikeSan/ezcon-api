<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginControllerSWG extends Controller
{
/**
 * @OA\Post(
 *      path="/signIn",
 *      operationId="loginUser",
 *      tags={"Auth"},
 *      summary="User's login",
 *      description="Make user's login and retrive the access token",
 *      @OA\RequestBody(
 *        @OA\MediaType(
 *          mediaType="application/json",
 *          @OA\Schema(
 *            @OA\Property(
 *              property="email",
 *              type="string",
 *             ),
 *             @OA\Property(
 *              property="password",
 *              type="string",
 *             ),
 *             example={"email": "user@email.com", "password": "123456"}
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
 * Returns users information
*/
}
