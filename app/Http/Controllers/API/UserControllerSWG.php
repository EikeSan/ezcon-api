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
 *      operationId="getUsersList",
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
/**
 * @OA\Post(
 *      path="/users/roles",
 *      operationId="addUserRoles",
 *      tags={"User"},
 *      summary="Add role to a user",
 *      description="Returns user with roles",
 *      @OA\RequestBody(
 *        @OA\MediaType(
 *          mediaType="application/json",
 *          @OA\Schema(
 *            @OA\Property(
 *              property="user",
 *              type="object",
 *              @OA\Property(
 *                  property="id",
 *                  type="integer",
 *                  example=1
 *              ),
 *             ),
 *             @OA\Property(
 *              property="roles",
 *              type="array",
 *               @OA\Items(
 *                  type="object",
 *                  @OA\Property(
 *                      property="id",
 *                      type="integer",
 *                      example=1
 *                  ),
 *               ),
 *             ),
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
 *          response=401, 
 *          description="Unauthenticated"
 *       ),
 *       @OA\Response(
 *          response=404, 
 *          description="Not Found"
 *       ),
 *      security={
 *         {"bearerAuth": {}}
 *      }
 * )
 *
 * Returns users information with roles
*/
/**
 * @OA\Delete(
 *      path="/users/roles",
 *      operationId="removeUserRoles",
 *      tags={"User"},
 *      summary="Remove role from user",
 *      description="Returns user with roles",
 *      @OA\RequestBody(
 *        @OA\MediaType(
 *          mediaType="application/json",
 *          @OA\Schema(
 *            @OA\Property(
 *              property="user",
 *              type="object",
 *              @OA\Property(
 *                  property="id",
 *                  type="integer",
 *                  example=1
 *              ),
 *             ),
 *             @OA\Property(
 *              property="roles",
 *              type="array",
 *               @OA\Items(
 *                  type="object",
 *                  @OA\Property(
 *                      property="id",
 *                      type="integer",
 *                      example=1
 *                  ),
 *               ),
 *             ),
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
 *          response=401, 
 *          description="Unauthenticated"
 *       ),
 *       @OA\Response(
 *          response=404, 
 *          description="Not Found"
 *       ),
 *      security={
 *         {"bearerAuth": {}}
 *      }
 * )
 *
 * Returns users information with roles
*/
}
