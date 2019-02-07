<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserSWG extends Authenticatable
{
/**
 * @OA\Schema(
 *     schema="User",
 *     title="User",
 *     description="User model",
 *     @OA\Property(
 *      property="id",
 *      type="integer",
 *      description="User's id",
 *      title="id",
 *      example="8"    
 *     ),
 *     @OA\Property(
 *      property="name",
 *      type="string",
 *      description="User's name",
 *      title="name",
 *      example="user"    
 *     ),
 *     @OA\Property(
 *      property="email",
 *      type="string",
 *      description="User's email",
 *      title="email",
 *      example="user@email.com"    
 *     ),
 *     @OA\Property(
 *      property="password",
 *      type="string",
 *      description="User's password",
 *      title="password",
 *      example="123456"    
 *     )
 * )
*/
   
}
