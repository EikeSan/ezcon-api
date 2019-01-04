<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth; 
use Validator;

class UserControllerSWG extends Controller
{
/**
 * @OA\Get(
 *      path="/users/me",
 *      operationId="getProjectsList",
 *      tags={"User"},
 *      summary="Get logged user information",
 *      description="Returns user's iformotation",
 *      @OA\Response(
 *          @OA\MediaType(mediaType="application/json"),
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @OA\Response(response=400, description="Bad request"),
 *       @OA\Response(
 *          response=401, 
 *          description="Unauthenticated"
 *       ),
 *      security={
 *         {"bearerAuth": {}}
 *      }
 * )
 *
 * Returns users information
*/
}
